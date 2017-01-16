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
         echo "<br> Nickname: ". $row["Nickname"]. " IPaddress: ". $row["IPaddress"]. " username " . $row["username"] . " password " . $row["password"] . "Description " . $row["Description"] . "<br>";
         
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
	      <img src="img/camera.jpg">
	      <div class="caption">
	        <h3><? echo $element[0] ?></h3>
	        <p><? echo $element[4] ?></p>
              <form id="delete" method="post" action="php/removedata.php">
                  <input type="hidden" name="delete_rec_id" value="<?php print $element[1]; ?>"/> 
                  <input type="submit" name="delete" value="Remove Feed"/>    
              </form>
	      </div>
	    </div>
	  <? } ?>

    <div class="thumbnail">
    <a href="addFeed.html">
      <img src="img/plus.png" alt="new feed">
      </a>
      <div class="caption">
        <h3>Add feed</h3>
      </div>
    </div>

	</div>
  </div>

</body>
<script type="text/javascript" src="js/thumbnailManagement.js"></script>
</html>