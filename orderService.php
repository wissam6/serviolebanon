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




    if(isset($_SESSION['userId'])){
      $time = $_POST['order_time']; //order time
      $date = $_POST['order_date']; //order date
      $userId = $_SESSION['userId'];
      $serviceId = $_POST['ordered_service_id'];

      $sql = "SELECT opening_date, closing_date, opening_time, closing_time from `service` WHERE `service_id` = '$serviceId'";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
          $opening_time = $row['opening_time']; //opening time
          $closing_time = $row['closing_time']; //closing time
          $openingDay = $row['opening_date']; //opening weekday
          $closingDay = $row['closing_date']; //closing weekday
        }
      }

  //  if($opening_time>$closing_time) echo "true";


      function WeekNumber($x)
      {
        if($x=="Monday") $y = "1";
        if($x=="Tuesday") $y = "2";
        if($x=="Wednesday") $y = "3";
        if($x=="Thursday") $y = "4";
        if($x=="Friday") $y = "5";
        if($x=="Saturday") $y = "6";
        if($x=="Sunday") $y = "7";
        return $y;
      }
      $openingDay = WeekNumber($openingDay); //opening weekday
      $closingDay = WeekNumber($closingDay); //closing weekday


      $weekday = date('w', strtotime($date)); //weekday of the order date
      if($weekday==0) $weekday = 7;





      $timeMin = date('H:i',strtotime($time) - 7200);  //ordertime - 2h
      $timeMax = date('H:i',strtotime($time) + 7200); //ordertime + 2h




      $todaysDate = date("Y-m-d");
      if($date<$todaysDate) {

      $_SESSION['oldDate'] = true;
      header('Location: service2.php');
    }
    else{
      if($weekday<$openingDay || $weekday>$closingDay)
      {
      /*  echo '
        <script>swal("", "WeekDay Not Available","warning"); </script>
        ';*/
        $_SESSION['weekday'] = true;
        header('Location: service2.php');
      }
      else{
      $sql = "SELECT * FROM `orderedservices` WHERE `date` = '$date' ";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0){
        $sql = "SELECT * FROM `orderedservices` WHERE (`time` > '$timeMin' OR `time` < '$timeMax') OR `time` = '$time'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0 || ($time<$opening_time || $time>$closing_time)){

        /*  echo '
          <script>swal("", "Time taken Or Service Does Not Open During This Hour","warning"); </script>
          ';*/
          $_SESSION['time1'] = true;
          header('Location: service2.php');
        }
        else{
          $_SESSION['serviceSuccess'] = true;
          $sql = "INSERT INTO `orderedservices` (userId, serviceId, time, date) VALUES ('$userId', '$serviceId', '$time', '$date')";
          mysqli_query($conn, $sql);
          header('Location: service2.php');
        }
      }
      else if($time<$opening_time || $time>$closing_time)
      {
    /*    echo '
        <script>swal("", "The service does not open during this hour","warning"); </script>
        '; */
        $_SESSION['time2'] = true;
        header('Location: service2.php');
      }
      else{
        $_SESSION['serviceSuccess2'] = true;
        $sql = "INSERT INTO `orderedservices` (userId, serviceId, time, date) VALUES ('$userId', '$serviceId', '$time', '$date')";
        mysqli_query($conn, $sql);
        header('Location: service2.php');
      }
    }
  }
}
    else {

        $_SESSION['no_login'] = true;
        header('Location: login.php');
    }

     ?>
  </body>
</html>
