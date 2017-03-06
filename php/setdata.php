<?php
	session_start();

	if (!empty($_POST["Email"]) && isset($_POST["Email"])) {
	  $_SESSION["username"] = $_POST["Email"];
	  $_SESSION["password"] = $_POST["Password"];
	} else {
	  $_SESSION["username"] = NULL;
	  $_SESSION["password"] = NULL;
	}
	
	header("Location: /index.php");
	exit();
?>