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

$sql = "INSERT INTO camera (Nickname, IPaddress, username, password)
VALUES ('$_POST[Nickname]', '$_POST[IPaddress]', '$_POST[username]', '$_POST[password]')";

if ($conn->query($sql) === TRUE) {
    echo "New record entered successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// $sql = "SELECT id, firstname, lastname FROM MyGuests";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//      // output data of each row
//      while($row = $result->fetch_assoc()) {
//          echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
//      }
// } else {
//      echo "0 results";
// }

$conn->close();
?>  