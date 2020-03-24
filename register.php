<?php
include "database.php";
function __construct()
{
	$this->connect_db();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="style.css" type="text/css">
  
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <h1>WELCOME TO MACOMO SCHOOL</h1>
  <h3 class="header">Kindly fill in the necessary details to update your test score<h3>
</head>
<body>
  <form method="post">
    <div>
      <h4>ID:</h4><input type="number" >
    </div>
    <div>
      <h4>Password:</h4><input type="password">
    </div>
    <div>
      <h4>Score:</h4><input type="number">
    </div>
    <div>
      <h4>Name:</h4><input type="name">
    </div>
    <div>
    <input type="submit" class="submit">
    </div>
  </form>
  
  
</body>
</html>