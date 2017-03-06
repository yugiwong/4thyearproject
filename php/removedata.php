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

if(isset($_POST['delete'])){
   $id = $_POST['delete_rec_id'];  
   $sql = "DELETE from camera WHERE IPaddress='$id'"; 
   $result = $conn->query($sql);
}

if ($conn->query($sql) === FALSE) {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("Location: /index.php");
exit();
?>  
