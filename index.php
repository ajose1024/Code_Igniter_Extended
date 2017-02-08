<?php
/* 
 * Include the code_init.php bootstrap file
 * 
 * Perform any pre-init necessary code here
 * 
 */

date_default_timezone_set( 'Europe/Lisbon' ) ;

$home_dir = realpath( dirname( __FILE__ ) ) ;
define( 'HOME_DIR', $home_dir ) ;
unset( $home_dir ) ;

// REQUIRE 'App_code/system_constants.php' file
require join( DIRECTORY_SEPARATOR, array( 'App_code', 'code_init', 'system_constants.php' ) ) ;

include HOME_DIR . DS . 'code_init.php' ;

// exit() ;