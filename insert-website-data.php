<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_personal_system";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

 // Check connection

 if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);
}

$website_name        = $_POST["website_name"];
$website_url         = $_POST["website_url"];
$website_description = $_POST["description"];

$sql = "INSERT INTO website_data VALUES('','$website_name', '$website_url', '$website_description')";
 
if ($conn->query($sql) === TRUE) {

   header("Location: dashboard-index.php?status=done");
   die();

} else {

    header("Location: dashboard-index.php?status=failed");
    die();
}

$conn->close();



?>