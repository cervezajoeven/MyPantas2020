<?php
ini_set( "display_errors", true );
define( "DB_DSN", "mysql:host=localhost;dbname=Eidosdb" );
define( "DB_USERNAME", "root" );
define( "DB_PASSWORD", "divine" );
define('DB_CHARACSET', 'utf8');

require_once ('Database_book.php');
require_once ('Dtable_book.php');

$db=new Database();
$datatable=New Dtable();

function handleException( $exception ) {
  echo  $exception->getMessage();
}

set_exception_handler( 'handleException' );
?>
