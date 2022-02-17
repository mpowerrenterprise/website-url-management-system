<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_personal_system";

$real_email = "";
$real_password = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT username, password FROM user_account";
$result = $conn->query($sql);

if($result->num_rows >= 1){

  while($row = $result->fetch_assoc()) {
   
    $real_username = $row['username'];
    $real_password = $row['password'];

  }

}else{

    echo "No data found";
}


$conn->close();


$user_entered_username    = $_POST["username"];
$user_entered_password = $_POST["password"];

 if($user_entered_username == $real_username and $user_entered_password == $real_password){

    session_start();
	$_SESSION['login_session'] = 'admin'; 

    header("Location: dashboard-index.php");
    die();

 }else{
    echo "<h1> Password or username is wrong </h1>";
 }

?>