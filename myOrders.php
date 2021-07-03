<?php session_start() ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="icon" href="logo.png">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"> </script>
    <link rel="stylesheet" href="search_styles2.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <title>Servio</title>
    <style media="screen">
    #menuStyle{
      text-decoration: none;
      color: purple;
      font-weight: 200;
    }
    .dropbtn {
  background-color: #3AAFA9;
  opacity: 0%;
  color: white;
  padding: 20px;
  font-size: 16px;
  border: none;
  cursor: pointer;
  margin-left: -3em;
  margin-top: 1em;
}

.dropdown {
  position: absolute;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #DEF2F1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  margin-left: -3em;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}
    body {
background-color:#f2f2f2;
font-family: 'RobotoDraft', 'Roboto', sans-serif;
-webkit-font-smoothing: antialiased;
}

*
{
-webkit-box-sizing: border-box;
box-sizing: border-box;
}

h5
{
margin:0px;
font-size:1.4em;
font-weight:700;
}
    p
    {
    font-size:12px;
    }
    .center
    {
    margin:25px;
    float: left;
    }
    .middle{
      position: absolute;
      background-color: #DEF2F1;
      width: 80em;
      height: auto;
      top: 10em;
      left: 30em;
    }
    .account_menu{
      position: absolute;
      background-color: #DEF2F1;
      top: 10em;
      left: 12em;
      width: 10em;
      height: 10em;
    }
    </style>
  </head>
  <body>
    <div class="header">
      <img src="logo.png" alt="logo" id="logo">
      <a href="#">
  <img src="menu.png" alt="menu" id="menu" width="auto" height="50px">
      </a>
      <div class="dropdown">
  <button class="dropbtn"></button>
  <div class="dropdown-content">
    <a href="index.php">Home</a>
    <a href="#footer">Contact Us</a>
    <a href="#">About Us</a>

  </div>
  </div>
<div class="account_menu">
<a href="edit_profile.php" id="menuStyle">Edit Profile</a><br>
<a href="myservices.php" id="menuStyle">My Services</a><br>
<a href="myOrders.php" id="menuStyle">My Orders</a>
</div>
<div class="middle">
  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "senior2";
  $conn = mysqli_connect($servername, $username, $password, $dbname);

  $id = $_SESSION['userId'];
  $sql = "SELECT orderId, time, date, service_name FROM service s, orderedservices o WHERE o.userId = '$id' AND o.serviceId = s.service_id";
  $result = mysqli_query($conn, $sql);
  $p=0;
  if(mysqli_num_rows($result) > 0)
  {
    while($row = mysqli_fetch_assoc($result))
    {
      $time[$p] = $row['time'];
      $date[$p] = $row['date'];
      $serviceName[$p] = $row['service_name'];
      $order_Id[$p] = $row['orderId'];
      $p++;
    }
  }

  for($i=0;$i<$p;$i++)
  {
    echo '<span style="color:blue;">Service Name:</span> '.$serviceName[$i] . ' <span style="color:blue;">Date:</span> ' . $date[$i] . ' <span style="color:blue;">Time:</span> ' . $time[$i]. '<br>';
    echo'
    <form action="DeleteOrder.php" method="post">
      <input type="hidden" value="'.$order_Id[$i].'" name="orderid">
      <button type="submit" style="background-color:white;margin-left:24em;" onclick="DMessage()">Cancel Order</button><br>
    </form>
    ';
  }


   ?>
   <script type="text/javascript">
     function DMessage() {
       swal("", "Order Successfully Deleted","success");
     }
   </script>
  </div>
</body>
</html>
