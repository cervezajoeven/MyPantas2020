<?php
ini_set( "display_errors", true );
define( "DB_DSN", "mysql:host=localhost;dbname=pantasdbnew" );
//define( "DB_DSN", "mysql:host=localhost;dbname=pantasdb_latest" );
define( "DB_USERNAME", "joeven" );
define( "DB_PASSWORD", "joeven241" );
define('DB_CHARACSET', 'utf8');

require_once ('Database.php');
require_once ('Dtable.php');

$db=new Database();
$datatable=New Dtable();

function handleException( $exception ) {
  echo  $exception->getMessage();
}

set_exception_handler( 'handleException' );
?>
