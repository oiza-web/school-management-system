<?php
class Database{
  public function getConn()
  {
      $db_host = "localhost";
      $db_name = "macomo";
      $db_user = "mac";
      $db_pass = "macomo1234";

      $dsn = 'mysql:host=' . $db_host . ';dbname=' . $db_name . ';charset=utf8';

      return new PDO($dsn, $db_user, $db_pass);
   
  }
  
  private function insertdata(){
    try {
      $conn = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = "INSERT INTO MyGuests (firstname, lastname, email)
      VALUES ('John', 'Doe', 'john@example.com')";
      // use exec() because no results are returned
      $conn->exec($sql);
      echo "New record created successfully";
      }
  catch(PDOException $e)
      {
      echo $sql . "<br>" . $e->getMessage();
      }
  
  $conn = null;
  }

}
