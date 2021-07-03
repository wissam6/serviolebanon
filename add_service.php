<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="icon" href="logo.png">
    <link rel="stylesheet" href="search_styles2.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500&display=swap" rel="stylesheet">
    <style media="screen">
    #service_label_style{

    }

    #service_input_style{
      width: 100%;
      padding: 4px;
    }
    #service_label_style{
      font-family: 'RobotoDraft', 'Roboto', sans-serif;
    }
    .AddService{

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
      .AddService{
        position: absolute;
        top: 10em;
      }
    </style>
    <meta charset="utf-8">
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
  <div class="AddService">
    <h1>Add Service</h1>
     <form class="add_a_service" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
      <label for="name" id="service_label_style">Service Name</label>
      <input type="text" name="name" value="" id="service_input_style" required><br>
      <label for="category" id="service_label_style">Category</label>
      <select class="" name="category" id="service_input_style" required>
        <option value="Internet">Internet</option>
        <option value="Plumbing">Plumbing</option>
        <option value="Medical">Medical</option>
      </select><br><br>

      <label for="location" id="service_label_style">Location</label>
      <select name="location" required>
        <?php
        $strJsonFileContents = file_get_contents("lebanon.json");
        // Convert to array
        $array = json_decode($strJsonFileContents, true);
        for($i=0;$i<26;$i++){
        $value = $array[$i]["city"];
        echo '<option value="'.$value.'">'. $array[$i]["city"]. '</option>';
        }
         ?>
      </select><br><br>
      <label for="" id="service_label_style">Service Banner</label>
      <input type="hidden" name="size" value="1000000">
      <input type="file" name="image" accept="image/png, image/gif, image/jpeg" required>
      <br><br>
      <label for="" id="service_label_style">Opening Date</label>
      <select class="" name="opening" id="service_input_style" required>
        <option value="Monday">Monday</option>
        <option value="Tuesday">Tuesday</option>
        <option value="Wednesday">Wednesday</option>
        <option value="Thursday">Thursday</option>
        <option value="Friday">Friday</option>
        <option value="Saturday">Saturday</option>
        <option value="Sunday">Sunday</option>
      </select><br>

      <label for="" id="service_label_style">Closing Date</label>
      <select class="" name="closing" id="service_input_style" required>
        <option value="Sunday">Sunday</option>
        <option value="Monday">Monday</option>
        <option value="Tuesday">Tuesday</option>
        <option value="Wednesday">Wednesday</option>
        <option value="Thursday">Thursday</option>
        <option value="Friday">Friday</option>
        <option value="Saturday">Saturday</option>

      </select><br>
      <label for="" id="service_label_style">Opening Time</label>
      <input type="time" name="opening_time" value="" id="service_input_style" required><br>
      <label for="" id="service_label_style">Closing Time</label>
      <input type="time" name="closing_time" value="" id="service_input_style" required><br>
      <label for="" id="service_label_style">Description</label>
      <textarea name="description" rows="8" cols="80" id="service_input_style" required></textarea><br><br>
      <input type="submit" name="Submit" value="Submit">
    </form>
    </div>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "senior2";
    $conn = mysqli_connect($servername, $username, $password, $dbname);



if(isset($_POST['name']) && isset($_POST['category']) && isset($_POST['location']) && isset($_POST['opening']) && isset($_POST['closing'])
&& isset($_POST['description']) && isset($_POST['opening_time']) && isset($_POST['closing_time']))
{
  $name = $_POST['name'];

  $category = $_POST['category'];
  $location = $_POST['location'];
  $id = $_SESSION['userId'];
  $opening = $_POST['opening'];
  $closing = $_POST['closing'];
  $description = $_POST['description'];
  $openingTime = $_POST['opening_time'];
  $closingTime = $_POST['closing_time'];

  $image = $_FILES['image']['name'];
  $target = "images/".basename($image);

//
$sql = "SELECT * FROM `service` WHERE `service_name` = '$name'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)
{
  echo'
  <body>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"> </script>
  <script>swal("", "Service Name already exists","warning"); </script>
  </body>
    ';

}
else{
  //
move_uploaded_file($_FILES['image']['tmp_name'], $target);
  $sql = "INSERT INTO `service` (`service_name` ,`service_category`, `service_location`, `userId`, `opening_date`, `closing_date`, `service_description`, `banner`, `opening_time`, `closing_time` )
VALUES ('$name', '$category', '$location', '$id', '$opening', '$closing', '$description', '$image', '$openingTime', '$closingTime')";
mysqli_query($conn, $sql);

echo'
<body>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"> </script>
<script>swal("", "Successfully Added The Service","success"); </script>
</body>
  ';
}
}

     ?>

  </body>
</html>
