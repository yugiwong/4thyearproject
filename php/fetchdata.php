<?php
session_start();

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

if ($_SESSION["username"]!=NULL && $_SESSION["password"]!=NULL) {
  $user = $_SESSION["username"];
  $pass = $_SESSION["password"];
  $sql = "SELECT Nickname, IPaddress, username, password, Description FROM camera WHERE username='$user' AND password='$pass'";
} else {
  $sql = "SELECT Nickname, IPaddress, username, password, Description FROM camera";
}

$result = $conn->query($sql);

$count = 0;

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {         
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
	  <? foreach($data as $element) { ?>
      <div class="col-sm-6 col-md-4">
  	    <div class="thumbnail">
  	      <img src="/img/camera.jpg">
          <!-- <embed src="http://192.168.1.234:8080/stream" width="600" height="400" scale="aspect" controller="true"> -->
  	      <div class="caption">
  	        <h3><? echo $element[0] ?></h3>
  	        <p><? echo $element[4] ?></p>
              <form id="delete" method="post" action="/php/removedata.php">
                <input type="hidden" name="delete_rec_id" value="<?php print $element[1]; ?>"/> 
                <input type="submit" name="delete" value="Remove Feed"/>    
              </form>
  	      </div>
  	    </div>
      </div>
	  <? } ?>

    <div class="col-sm-6 col-md-4">
      <div class="thumbnail">
        <a href="/addFeed.html"> <img src="/img/plus.png" alt="new feed" width="300" height="300"> </a>
        <div class="caption">
          <h3>Add feed</h3>
        </div>
      </div>
    </div>
  </div>
</body>
</html>