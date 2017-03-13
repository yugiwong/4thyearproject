<html>
<body>

<?php
ini_set( 'error_reporting', E_ALL );
ini_set( 'display_errors', true );
include(__DIR__."/php/navbar.php");
?>

<embed src="http://<? echo $_GET["IPaddress"] ?>:<? echo $_GET["Port"] ?>/stream" width="600" height="400" scale="aspect" controller="true" style="padding-left: 20px"> 

<form>
<button type="button" onclick="parent.location='/php/startrecording.php?name=<? echo $_GET["name"]?>'" style="margin-left: 20px; margin-top: 10px">Start</button>
<button type="button" onclick="parent.location='/php/stoprecording.php?name=<? echo $_GET["name"]?>'" style="margin-left: 40px">Stop</button>
<button type="button" onclick="parent.location='/recordings.php'" style="margin-left: 60px">Saved recordings</button>
</form>

<?php
include(__DIR__."/php/footer.php");
?>

</body>
</html>