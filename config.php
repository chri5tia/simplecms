<?php
ini_set ("display_errors", true );
date_default_timezone_set ( "America/Los_Angeles" );  // http://www.php.net/manual/en/timezones.php
define ( "DB_DSN", "mysql:host=localhost;dbname=simplecms" );
define ( "DB_USERNAME", "simplecms" );
define ( "DB_PASSWORD", "AbCd!2#4" );
define ( "CLASS_PATH", "classes" );
define ( "TEMPLATE_PATH", "templates" );
define ( "HOMEPAGE_NUM_ARTICLES", "3" );
define ( "ADMIN_USERNAME", "admin" ); // Change to custom username
define ( "ADMIN_PASSWORD", "password" ); //Change to custom password

require( CLASS_PATH . "/Article.php" );

/**
 * Function handleException
 * Log error messages and throw up generic error message
 */
function handleException( $exception ) {
  echo "Bummer. Something is wrong.";
  error_log( $exception->getMessage() );
}

set_exception_handler( 'handlerException' );
?>
