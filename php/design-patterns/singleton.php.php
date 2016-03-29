<?php
//require_once("DB.php");

class DatabaseConnection
{
  public static function get()
  {
    static $db = null;
    if ( $db == null )
      $db = new DatabaseConnection();
    return $db;
  }

  private $_handle = null;

  private function __construct()
  {
    $dsn = 'mysql://root:password@localhost/photos';
    $this->_handle =$dsn;
  }
  
  public function handle()
  {
    return $this->_handle;
  }
}

print( "Handle = ".DatabaseConnection::get()->handle()."\n" );echo "<br/>";
print( "Handle = ".DatabaseConnection::get()->handle()."\n" );
?>