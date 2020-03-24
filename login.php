<?php
session_start();
$db_host = "localhost";
   $db_user = "todo_www";
   $db_name ="oiza_todo";
   $db_pass = "olorunfemi";
   $conn= mysqli_connect($db_host, $db_user,$db_pass, $db_name);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if ($_POST['username'] == 'todo_www' && $_POST['password'] == 'olorunfemi') {

        $_SESSION['is_logged_in'] = true;

        die("You have been successfully Logged In");

    } else {

        $error = "login incorrect";

    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LogIn</title>
  <h1>Hello World!</h2>
</head>
<body>
<form method="post">

<div>
    <label for="username">Username</label>
    <input name="username" id="username">
</div>

<div>
    <label for="password">Password</label>
    <input type="password" name="password" id="password">
</div>

<button>Log in</button>

</form>
</body>
</html>