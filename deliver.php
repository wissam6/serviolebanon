<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "senior2";
$conn = mysqli_connect($servername, $username, $password, $dbname);

$orderId = $_POST['hidden_id'];
$userId = $_POST['hidden_id2'];

$sql = "INSERT INTO deliveredservices (orderId, userId) VALUES ('$orderId', '$userId')";
mysqli_query($conn, $sql);

$sql2 = "DELETE FROM orderedservices WHERE orderId='$orderId'";
mysqli_query($conn, $sql2);
header("Location: myservices.php");
?>
