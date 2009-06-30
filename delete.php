<?php 

/*
 * delete.php
 * Deletes a DN and presents a "job's done" message.
 *
 * Variables that come in as POST vars:
 *  - dn (rawurlencoded)
 *  - server_id
 */

require realpath( 'common.php' );

$dn = $_POST['dn'];
$encoded_dn = rawurlencode( $dn );
$server_id = $_POST['server_id'];

if( $dn === null )
	pla_error( $lang['you_must_specify_a_dn'] );

if( is_server_read_only( $server_id ) )
	pla_error( $lang['no_updates_in_read_only_mode'] );

check_server_id( $server_id ) or pla_error( $lang['bad_server_id'] );
have_auth_info( $server_id ) or pla_error( $lang['not_enough_login_info'] );

$ds = pla_ldap_connect( $server_id ) or pla_error( $lang['could_not_connect'] );

// Check the user-defined custom callback first.
if( true === preEntryDelete( $server_id, $dn ) ) {
	$del_result = @ldap_delete( $ds, $dn );
} else {
	exit;
}

if( $del_result )
{
	// Custom callback
	postEntryDelete( $server_id, $dn );

	// kill the DN from the tree browser session variable and
	// refresh the tree viewer frame (left_frame)

	session_start();
	if( session_is_registered( 'tree' ) )
	{
		$tree = $_SESSION['tree'];

		// does it have children? (it shouldn't, but hey, you never know)	
		if( isset( $tree[$server_id][$dn] ) )
			unset( $tree[$server_id][$dn] );
		
		// search and destroy
		foreach( $tree[$server_id] as $tree_dn => $subtree )
			foreach( $subtree as $key => $sub_tree_dn )
				if( 0 == strcasecmp( $sub_tree_dn, $dn ) ) 
					unset( $tree[$server_id][$tree_dn][$key] );
		$_SESSION['tree'] = $tree;
		session_write_close();
	}

	include 'header.php';

	?>

	<script language="javascript">
		parent.left_frame.location.reload();
	</script>

	<br />
	<br />
	<center><?php echo sprintf( $lang['entry_deleted_successfully'], $dn ); ?></center>

	<?php 


} else {
    pla_error( sprintf( $lang['could_not_delete_entry'], htmlspecialchars( utf8_decode( $dn ) ) ),
               ldap_error( $ds ), 
               ldap_errno( $ds ) );
}
