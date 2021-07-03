<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "senior2";
$conn = mysqli_connect($servername, $username, $password, $dbname);

$name = $_POST['i'];
$sql = "DELETE FROM service
WHERE service_name = '$name'";
$result = mysqli_query($conn, $sql);
sleep(1.5);
header('Location: myservices.php');
 ?>
