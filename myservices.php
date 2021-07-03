<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="icon" href="logo.png">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"> </script>
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

    /* End Non-Essential  */

    .property-card
    {
    height:18em;
    width:14em;
    display:-webkit-box;
    display:-ms-flexbox;
    display:flex;
    -webkit-box-orient:vertical;
    -webkit-box-direction:normal;
    -ms-flex-direction:column;
    flex-direction:column;
    position:relative;
    -webkit-transition:all 0.4s cubic-bezier(0.645, 0.045, 0.355, 1);
    -o-transition:all 0.4s cubic-bezier(0.645, 0.045, 0.355, 1);
    transition:all 0.4s cubic-bezier(0.645, 0.045, 0.355, 1);
    border-radius:16px;
    overflow:hidden;
    -webkit-box-shadow:  15px 15px 27px #e1e1e3, -15px -15px 27px #ffffff;
    box-shadow:  15px 15px 27px #e1e1e3, -15px -15px 27px #ffffff;
    }
    /* ^-- The margin bottom is necessary for the drop shadow otherwise it gets clipped in certain cases. */

    /* Top Half of card, image. */

    .property-image
    {
    height:6em;
    width:14em;
    padding:1em 2em;
    position:Absolute;
    top:0px;
    -webkit-transition:all 0.4s cubic-bezier(0.645, 0.045, 0.355, 1);
    -o-transition:all 0.4s cubic-bezier(0.645, 0.045, 0.355, 1);
    transition:all 0.4s cubic-bezier(0.645, 0.045, 0.355, 1);
    background-image:url('https://cdn.photographylife.com/wp-content/uploads/2017/01/What-is-landscape-photography.jpg');
    background-size:cover;
    background-repeat:no-repeat;
    }

    /* Bottom Card Section */

    .property-description
    {
    background-color: #FAFAFC;
    height:12em;
    width:14em;
    position:absolute;
    bottom:0em;
    -webkit-transition:all 0.4s cubic-bezier(0.645, 0.045, 0.355, 1);
    -o-transition:all 0.4s cubic-bezier(0.645, 0.045, 0.355, 1);
    transition:all 0.4s cubic-bezier(0.645, 0.045, 0.355, 1);
    padding: 0.5em 1em;
    text-align:center;
    }

    /* Social Icons */

    .property-social-icons
    {
    width:1em;
    height:1em;
    background-color:black;
    position:absolute;
    bottom:1em;
    left:1em;
    -webkit-transition:all 0.4s cubic-bezier(0.645, 0.045, 0.355, 1);
    -o-transition:all 0.4s cubic-bezier(0.645, 0.045, 0.355, 1);
    transition:all 0.4s cubic-bezier(0.645, 0.045, 0.355, 1);
    }

    /* Property Cards Hover States */

    .property-card:hover .property-description
    {
    height:0em;
    padding:0px 1em;
    }
    .property-card:hover .property-image
    {
    height:18em;
    }

    .property-card:hover .property-social-icons
    {
    background-color:white;
    }

    .property-card:hover .property-social-icons:hover
    {
    background-color:blue;
    cursor:pointer;
    }
      .middle{
        position: absolute;
        background-color: #DEF2F1;
        width: 70em;
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
      #deleteButton{
        background-color: #2B7A78;
        padding: 4px;
        border-radius: 2px;
        color: #FEFFFF;
      }
      #viewButton{
        background-color: #2B7A78;
        padding: 4px;
        border-radius: 2px;
        color: #FEFFFF;
      }
      #menuStyle{
        text-decoration: none;
        color: purple;
        font-weight: 200;
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
  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "senior2";
  $conn = mysqli_connect($servername, $username, $password, $dbname);

  $userId = $_SESSION['userId'];
  $sql = "SELECT service_name, service_description, banner, service_id from service WHERE userId='$userId'";
  $result = mysqli_query($conn, $sql);
  $i=0;
  if(mysqli_num_rows($result) > 0)
  {
    while($row = mysqli_fetch_assoc($result))
    {
      $name[$i] = $row['service_name'];
      $description[$i] = $row['service_description'];
      $banner[$i] = $row['banner'];
      $id[$i] = $row['service_id'];
      $i++;
    }
  }

for($j=0;$j<$i;$j++){
echo'  <div class="center">
    <div class="property-card">
      <a href="#">
      <img src="images/'.$banner[$j].'" alt="" width="250px" height="290px">
      </a>
      <div class="property-description">
        <h5>'.$name[$j].'</h5>
        <p>'. $description[$j] .'</p>
      </div>

        <div class="property-social-icons">
          <!-- I would usually put multipe divs inside here set to flex. Some people might use Ul li. Multiple Solutions -->
          <form  method="post" action="deleteService.php">
          <input type="hidden" name="i" value="'.$name[$j].'">
          <button type="submit" name="button" id="deleteButton" onclick="Message()">Delete</button>
          </form>
          <form class="" action="viewOrders.php" method="post">
            <input type="hidden" name="order_service_id" value="'.$id[$j].'">
            <button type="submit" name="view_reports_button" id="viewButton" style="position:absolute;top:-13px;px;left:10em;">View Orders</button>
          </form>
        </div>
      </a>
    </div>
  </div>';
}
?>
</div>
<script type="text/javascript">
  function Message() {
    swal("", "Service Successfully Deleted","success");
  }
</script>

</body>
</html>
