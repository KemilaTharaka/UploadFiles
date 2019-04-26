<!-- $mysqli = new mysqli('localhost','root','','images') or die($mysqli->connect_error);
$table = 'upload';
$extentions = array('jpg','png','gif','jpeg');
$file_ext = end($file_ext);
$file_ext = end($file_ext);
header('Access-Control-Allow-Origin: *');
var_dump($_FILES); -->

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "images";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "INSERT INTO upload (name, img_dir)
VALUES ('John', 'Doe')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
