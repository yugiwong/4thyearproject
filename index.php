<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>IP camera control panel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<?php
ini_set( 'error_reporting', E_ALL );
ini_set( 'display_errors', true );
include(__DIR__."/php/navbar.php");
?>

<div class="content" id="contents"></div>

</body>
<script type="text/javascript" src="/js/submitform.js"></script>
</html>