<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<?php
require 'partials/header.php';
?>
  <h1>Login</h1>
<span>or <a href="signup.php">Signup</a> </span>
  <form action="login.php" method="post">
      <input type="text" name="Name" placeholder="enter your name">
      <input type="password" name="Password" placeholder="enter your password">
      <input type="submit" value="Send">

  </form>

</body>
</html>