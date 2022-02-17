<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_personal_system";

$id_to_be_deleted = $_GET['id'];

echo $id_to_be_deleted;


$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "DELETE FROM website_data WHERE auto_id = $id_to_be_deleted";

if ($conn->query($sql) === TRUE) {

    header("Location: view-data.php?status=deleted");
    die();
 
 } else {
 
     header("Location: view-data.php?status=failed");
     die();
 }

$conn->close();



?>