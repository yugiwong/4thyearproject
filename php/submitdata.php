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

$sql = "INSERT INTO camera (Nickname, IPaddress, username, password, Description)
VALUES ('$_POST[Nickname]', '$_POST[IPaddress]', '$_POST[username]', '$_POST[password]', '$_POST[Description]')";

if ($conn->query($sql) === FALSE) {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();    

header("Location: /index.html");
exit();
?>  