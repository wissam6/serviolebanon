<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "senior2";
$conn = mysqli_connect($servername, $username, $password, $dbname);

$orderid = $_POST['orderid'];
$sql = "DELETE from orderedservices WHERE orderId='$orderid'";
mysqli_query($conn,$sql);
sleep(1.5);
header('Location: myOrders.php');
 ?>
