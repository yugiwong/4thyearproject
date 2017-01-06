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

$sql = "SELECT Nickname, IPaddress, username, password FROM camera";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<br> Nickname: ". $row["Nickname"]. " IPaddress: ". $row["IPaddress"]. " username " . $row["username"] . " password " . $row["password"] . "<br>";
         $rows[] = $row;
     }
} else {
     echo "0 results";
}
print json_encode($rows);

$conn->close();
?>  