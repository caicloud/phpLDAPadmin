<?php

/*******************************************
<pre>

If you are seeing this in your browser,
PHP is not installed on your web server!!!

</pre>
*******************************************/

require 'common.php';

if( ! file_exists(realpath( 'config.php' )) ) {

?>

<html>
<head>
	<title>phpLDAPadmin - <?php echo pla_version(); ?></title>
	<link rel="stylesheet" href="style.css" />		
</head>

<body>
<h3 class="title">Configure phpLDAPadmin</h1>
<br />
<br />
<center>
You need to configure phpLDAPadmin. Edit the file 'config.php' to do so.<br />
<br />
An example config file is provided in 'config.php.example'

</center>
</body>
</html>

<?php  } elseif( check_config() )  { 

require 'config.php';
echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>\n";

?>

<!DOCTYPE html
  PUBLIC "-//W3C//DTD XHTML Basic 1.0//EN"
    "http://www.w3.org/TR/xhtml-basic/xhtml-basic10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="no-NO">
<head><title>phpLDAPadmin - <?php echo pla_version(); ?></title></head>

<frameset cols="<?php echo $tree_width; ?>,*">
	<frame src="tree.php" name="left_frame" id="left_frame" />
	<frame src="welcome.php" name="right_frame" id="right_frame" />
</frameset>

</html>

<?php  } else { ?>

<?php } ?>


<?php

/*
 * Makes sure that the config file is properly setup and
 * that your install of PHP can handle LDAP stuff.
 * TODO: Check ALL config elements for correctness in syntax
 * TODO: Make sure all required config stuff is defined.
 */
function check_config()
{
	/* Make sure their PHP version is current enough */
	if( strcmp( phpversion(), REQUIRED_PHP_VERSION ) < 0 ) {
		pla_error( "phpLDAPadmin requires PHP version 4.1.0 or greater. You are using " . phpversion() );
	}

	/* Make sure this PHP install has LDAP support */
	if( ! extension_loaded( 'ldap' ) )
	{
		pla_error( "Your install of PHP appears to be missing LDAP support. Please install " .
				"LDAP support before using phpLDAPadmin." );
		return false;
	}

	/* Make sure they have all the functions we will need */
	$required_functions = array( 'utf8_encode', 'utf8_decode', 'htmlspecialchars' );
	foreach( $required_functions as $function ) {
		if( ! function_exists( $function ) ) {
			pla_error( "Your install of PHP appears to be missing the function '<b>$function()</b>' " .
				"phpLDAPadmin requires this function to work properly." );
			return false;
		}
	}

	/* Make sure the config file is readable */
	//if( ! is_readable( 'config.php' ) )
	if( ! is_readable( realpath( 'config.php' ) ) ) {
		echo "The config file 'config.php' is not readable. Please check its permissions.";
		return false;
	}

	/* check for syntax errors in config.php */
	// capture the result of including the file with output buffering
	ob_start();
	include 'config.php';
	$str = ob_get_contents();
	ob_end_clean();
	if( $str && false !== strpos( $str, 'error' ) )  {
		$str = strip_tags( $str );
		$matches = array();
		preg_match( "/on line (\d+)/", $str, $matches );
		$line_num = $matches[1];
		$file = file( 'config.php' );
		?>
			<html>
			<head>
			<title>phpLDAPadmin Config File Error</title>
			<link rel="stylesheet" href="style.css" />
			</head>

			<body>
			<h3 class="title">Config file error</h3>
			<h3 class="subtitle">Syntax error on line <?php echo $line_num; ?></h3>
	
			<center>
			Looks like your config file has a syntax error on line <?php echo $line_num; ?>. 
			Here is a snippet around that line
			<br />
			<br />
			<div style="text-align: left; margin-left: 80px; margin-right: 80px; border: 1px solid black; padding: 10px;">
			<tt>
			<?php
			for( $i=$line_num-9; $i<$line_num+5; $i++ ) {
				if( $i+1 == $line_num )
					echo "<div style=\"color:red;background:#fdd\">";
				if( $i < 0 )
					continue;
				echo "<b>" . ($i+1) . "</b>: " . htmlspecialchars($file[ $i ]) . "<br />";
				if( $i+1 == $line_num )
					echo "</div>";
			}
			?>
			</tt>
			</div>
			<br />
			Hint: Sometimes these errors are caused by lines <b>preceding</b> the line reported.
			</body>
			</html>

		<?php
		return false;
	}

	/* check the existence of the servers array */
	require 'config.php';
	if( ! is_array( $servers ) || count( $servers ) == 0 ) {
		echo "Your config.php is missing the servers array or the array is empty. ";
		echo " Please see the sample file config.php.example ";
		return false;
	}

	/* Make sure there is at least one server in the array */
	$count = 0;
	foreach( $servers as $i => $server )
		if( $server['host'] )
			$count++;
	if( $count == 0 ) {
		echo "None of the " . count($servers) . " servers in your \$servers array is ";
		echo "active in config.php. phpLDAPadmin cannot proceed util you correct this.";
		return false;
	}

	// Check each of the servers in the servers array
	foreach( $servers as $id => $server ) {
		if( isset( $server['host'] ) ) {

			// Make sure they specified an auth_type
			if( ! isset( $server['auth_type'] ) ) {
				echo "Your configuratoin has an error. You omitted the 'auth_type' directive on server number $id";
				echo "'auth_type' must be set, and it must be one of 'config' or 'form'.";
				return false;
			}

			// Make sure they specified a correct auth_type
			if( $server['auth_type'] != 'config' && $server['auth_type'] != 'form' ) {
				echo "You specified an invalid 'auth_type' (" . htmlspecialchars( $server['auth_type'] ) . ") ";
				echo "for server number $id in your configuration.";
				return false;
			}
		}
	}

	return true;
}

?>
