<?php
/* 
 * Include the code_init.php bootstrap file
 * 
 * Perform any pre-init necessary code here
 * 
 */

date_default_timezone_set( 'Europe/Lisbon') ;

$home_dir = realpath( dirname( __FILE__)) ;
define( 'HOME_DIR', $home_dir) ;
unset( $home_dir) ;

include HOME_DIR . DIRECTORY_SEPARATOR . 'code_init.php' ;

// exit() ;