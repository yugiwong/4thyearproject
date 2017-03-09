<!DOCTYPE html>
<html lang="en">
<head>
  <title>IP camera control panel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/stylesheet.css">
</head>
<body>

<?php
ini_set( 'error_reporting', E_ALL );
ini_set( 'display_errors', true );
include(__DIR__."/php/navbar.php");
?>
  
<div class="container">
    <form action="php/register.php" method="post">
    <p>Username:</p>
    <input type="text" name="Username"><br>
    <p>Password:</p>
    <input type="text" name="Password"><br><br>    

    <input type="submit" value="Register">
</div>

<div class="content" id="contents"></div>

<?php
include(__DIR__."/php/footer.php");
?>

</body>

</html>