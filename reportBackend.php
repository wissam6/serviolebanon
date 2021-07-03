<?php session_start() ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "senior2";
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    $report = $_POST['report'];
    $description = $_POST['description'];
    $userId = $_SESSION['userId'];
    $serviceId = $_POST['service__id'];
    if(isset($_SESSION['userId'])){
    $sql = "INSERT INTO servicereports (userId, service_id, report_type, report_description) VALUES ('$userId', '$serviceId', '$report', '$description')";
    $result = mysqli_query($conn, $sql);
    sleep(1.5);
    header('Location: service2.php');
  }
  else{
      $_SESSION['no_login'] = true;
      header('Location: login.php');
  }
     ?>
  </body>
</html>
