<?php

require 'common.php';

$container = isset( $_GET['container'] ) ? rawurldecode( $_GET['container'] ) : false;
$server_id = isset( $_GET['server_id'] ) ? $_GET['server_id'] : false;
$return_form_element = htmlspecialchars( $_GET['form_element'] );

include "header.php";

echo "<h3 class=\"subtitle\">Automagic Entry Chooser</h3>\n";

if( $container ) {
	echo $lang['server_colon_pare'] . "<b>" . htmlspecialchars( $servers[ $server_id ][ 'name' ] ) .  "</b><br />\n";
	echo $lang['look_in'] . "<b>" . htmlspecialchars( $container ) . "</b><br />\n";
}

/* Has the use already begun to descend into a specific server tree? */
if( $server_id !== false && $container !== false )
{
	check_server_id( $server_id ) or pla_error( $lang['bad_server_id'] );
	have_auth_info( $server_id ) or pla_error( $lang['not_enough_login_info'] );
	pla_ldap_connect( $server_id ) or pla_error( $lang['could_not_connect'] );
	$dn_list = get_container_contents( $server_id, $container );
	sort( $dn_list );

	$base_dn = $servers[ $server_id ][ 'base' ];
	if( ! $base_dn )
		$base_dn = try_to_get_root_dn( $server_id );

	if( $container == $base_dn ) {
		$parent_container = false;
		$up_href = "entry_chooser.php?form_element=$return_form_element";
	} else {
		$parent_container = get_container( $container );
		$up_href = "entry_chooser.php?form_element=$return_form_element&amp;server_id=$server_id&amp;container=" .
				rawurlencode( $parent_container );
	}
	echo "&nbsp;<a href=\"$up_href\" style=\"text-decoration:none\">" .
		"<img src=\"images/up.png\"> ". $lang['back_up_p'] ."</a><br />\n";

	if( count( $dn_list ) == 0 )
		echo "&nbsp;&nbsp;&nbsp;(". $lang['no_entries'] .")<br />\n";
	else
		foreach( $dn_list as $dn ) {
			$href = "javascript:returnDN( '$dn' )";
			echo "&nbsp;&nbsp;&nbsp;<a href=\"entry_chooser.php?form_element=$return_form_element".
				"&amp;server_id=$server_id&amp;container=" .
				rawurlencode( $dn ) . "\"><img src=\"images/plus.png\" /></a> " .
				"<a href=\"$href\">" . htmlspecialchars( $dn ) . "</a><br />\n";
		}
}
/* draw the root of the selection tree (ie, list all the servers) */
else
{
	foreach( $servers as $id => $server ) {
		if( $server['host'] ) {
			echo "<b>" . htmlspecialchars( $server['name'] ) . "</b><br />\n";
			if( ! have_auth_info( $id ) )
				echo "<small>&nbsp;&nbsp;&nbsp;(" . $lang['not_logged_in'] . ")</small><br />";
			else {
				$dn = ( $server['base'] ? $server['base'] : try_to_get_root_dn( $id ) );
				if( ! $dn ) {
					echo "<small>&nbsp;&nbsp;&nbsp;(". $lang['could_not_det_base_dn'] .")</small><br />";
				} else {
					$href = "javascript:returnDN( '$dn' )";
					echo "&nbsp;&nbsp;&nbsp;<a href=\"entry_chooser.php?form_element=" .
						"$return_form_element&amp;server_id=$id&amp;container=" .
						rawurlencode( $dn ) . "\"><img src=\"images/plus.png\" /></a> " .
						"<a href=\"$href\">" . htmlspecialchars( $dn ) . "</a><br />\n";
				}
			}
		}
	}
}

// added by PD. 14082003,
// adding the element access allows it to work with javascript arrays

// the name of the form extracted from the first part of the URL variable.
$formpart=substr($return_form_element,0,strpos($return_form_element,"."));

// the name of the element extracted from the last part of the URL variable (after the dot)
$elmpart =substr($return_form_element,strpos($return_form_element,".")+1);

// rebuilt return value
$return_form_element = $formpart . ".elements[\"" . $elmpart . "\"]";

?>

<script language="javascript">
	function returnDN( dn )
	{
		opener.document.<?php echo $return_form_element; ?>.value = dn;
		close();
	}
</script>
