<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "senior2";
$conn = mysqli_connect($servername, $username, $password, $dbname);


if(isset($_POST['message'])){
$email = $_POST['email'];
$message = $_POST['message'];
$sql = "INSERT INTO contactus (email, message) VALUES ('$email', '$message')";
mysqli_query($conn, $sql);
header('Location: index.php');
$_SESSION['contactUs'] = true;
}
 ?>
