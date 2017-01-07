<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "camera_info";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT Nickname, IPaddress, username, password, Description FROM camera";
$result = $conn->query($sql);

$count = 0;

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<br> Nickname: ". $row["Nickname"]. " IPaddress: ". $row["IPaddress"]. " username " . $row["username"] . " password " . $row["password"] . $row["Description"]. "Description" . "<br>";
         
         //store values in array that html below can use
         $data[$count] = array($row["Nickname"],$row["IPaddress"],$row["username"],$row["password"],$row["Description"]);

         $count = $count+1; 
     }
} else {
     echo "0 results";
}

$conn->close();
?>  


<html>
<body>
  <div class="row">
  	<div class="col-sm-6 col-md-4">
	  <? foreach($data as $element) { ?>
	    <div class="thumbnail">
	      <img src="https://images7.alphacoders.com/697/thumb-1920-697788.png" alt="twins">
	      <div class="caption">
	        <h3><? echo $element[0] ?></h3>
	        <p><? echo $element[4] ?></p>
	        <p><a href="#" class="btn btn-primary" role="button" id="buttontest">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
	      </div>
	    </div>
	  <? } ?>

    <div class="thumbnail">
      <img src="http://static.zerochan.net/Re%3AZero.Kara.Hajimeru.Isekai.Seikatsu.full.2005784.jpg" alt="new feed">
      <div class="caption">
        <h3>Thumbnail label</h3>
        <p>yayy stuff</p>
        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      </div>
    </div>

	</div>
  </div>

</body>
</html>