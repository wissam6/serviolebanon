<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="icon" href="logo.png">
    <link rel="stylesheet" href="search_styles2.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <style media="screen">
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
      #inputStyle{
        width: 90%;
        padding: 3px;
        margin: 4px;
      }
      #labelstyle{
        font-family: 'Roboto', sans-serif;
      }
      #submitButton{
        font-family: 'Roboto', sans-serif;
        width: 15em;
        height: 2em;
        margin-top: 10px;
        margin-left: 6px;
        background-color: #2B7A78;
        color: #FEFFFF;
      }
      #menuStyle{
        text-decoration: none;
        color: purple;
        font-weight: 200;
        font-family: 'Roboto', sans-serif;
      }
    </style>
    <title>Servio</title>
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
<form class="" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
<label for="" id="labelstyle">Account Information</label><br>
<label for="" id="labelstyle">Username: </label>
<?php
if(isset($_SESSION['userName']))
echo $_SESSION['userName'];
 ?>
<input type="text" name="username" value="" placeholder="new username" id="inputStyle"><br>
<label for="" id="labelstyle">email: </label>
<?php
if(isset($_SESSION['userEmail']))
echo $_SESSION['userEmail'];
 ?>
<input type="text" name="email" value="" placeholder="new email" id="inputStyle"><br>

<label for="" id="labelstyle">Change Password</label><br>
<label for="" id="labelstyle">Password</label><br>
<input type="password" name="password" value="" placeholder="new password" id="inputStyle"><br>
<label for="" id="labelstyle">Password Confirmation</label>
<input type="password" name="passwordC" value="" placeholder="retype password" id="inputStyle"><br>
<button type="submit" name="button" id="submitButton">Submit Changes</button>
</form>
  </div>
  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "senior2";
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  $oldusername = $_SESSION['userName'];


  if(isset($_POST['username'])){
  if(!(empty($_POST['username'])))
  {
    $username = $_POST['username'];
    $sql = "SELECT * FROM users WHERE userName='$username'";
    $result = mysqli_query($conn, $sql);
  if(mysqli_num_rows($result) > 0){

    echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"> </script>';
    echo '<script> swal("", "This username already exists","warning"); </script>';
  //  header('Location: edit_profile.php');

  }
  else{
    $username = $_POST['username'];
    $sql ="UPDATE `users` SET `userName`='$username' WHERE `userName` ='$oldusername'";
    mysqli_query($conn, $sql);
    $_SESSION['userName'] = $username;
    $oldusername = $username;
    echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"> </script>';
    echo '<script> swal("", "Changes Apllied","success"); </script>';

    //header('Location: edit_profile.php');
    }
  }
}

if(isset($_POST['email'])){
if(!(empty($_POST['email'])))
{
$email = $_POST['email'];
$sql = "SELECT * FROM users WHERE userEmail='$email'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0){

  echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"> </script>';
  echo '<script> swal("", "This email already exists","warning"); </script>';
//  header('Location: edit_profile.php');

}
else{
  $email = $_POST['email'];
  $sql ="UPDATE `users` SET `userEmail`='$email' WHERE `userName` ='$oldusername'";
  mysqli_query($conn, $sql);
  $_SESSION['userEmail'] = $email;
  echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"> </script>';
  echo '<script> swal("", "Changes Apllied","success"); </script>';
}
}
}


  if(isset($_POST['password'])){
  if(!(empty($_POST['password'])))
  {
    $password1 = $_POST['password'];
    $password2 = $_POST['passwordC'];
    if($password1 == $password2)
    {
      $salt = "Servio";
      $password1 = $password1.$salt;
      $password1 = sha1($password1);
      $sql = "SELECT * FROM `users` WHERE `password`='$password1'";
      $result = mysqli_query($conn, $sql);
      if(mysqli_num_rows($result) > 0)
      {
        echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"> </script>';
        echo '<script> swal("", "You need to enter a new password","warning"); </script>';
      }
      else{
        $salt = "Servio";
        $password1 = $password1.$salt;
        $password1 = sha1($password1);
        $sql ="UPDATE `users` SET `password`='$password1' WHERE `userName` ='$oldusername'";
        mysqli_query($conn, $sql);
        echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"> </script>';
        echo '<script> swal("", "Changes Apllied","success"); </script>';
      }
    }

    else {
      echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"> </script>';
      echo '<script>swal("", "Passwords do not match","warning"); </script>';
    }
  }
}
   ?>
  </body>
</html>
