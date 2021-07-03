<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="icon" href="logo.png">
    <script data-ad-client="ca-pub-6521100869681726" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <meta charset="utf-8">
    <title>Servio</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="search_styles2.css">
    <link rel="stylesheet" href="indexStyle.css">
    <style media="screen">
    #featureStyle{
      font-family: 'RobotoDraft', 'Roboto', sans-serif;
      font-size: 25px;
      font-weight: 400;
    }
    #featureStyle2{
      font-family: 'RobotoDraft', 'Roboto', sans-serif;
      color: black;
      font-size: 14px;

    }
    * {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
  margin-left: 16em;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 30px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
  color:white;
  font-weight: bolder;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
  margin-left: -20em;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
    .dropbtn {
  background-color: #3AAFA9;
  opacity: 0%;
  color: white;
  padding: 20px;
  font-size: 16px;
  border: none;
  cursor: pointer;
  margin-left: -33em;
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
  margin-left: -33em;
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
color: black;
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


/* Optional

.property-image-title
{
text-align:center;
position:Relative;
top:30%;
opacity:0;
transition:all 0.4s cubic-bezier(0.645, 0.045, 0.355, 1) 0.2s;
color:black;
font-size:1.2em;
}

.property-card:hover .property-image-title
{
opacity:1;
}

*/
    </style>
  </head>
  <body>
    <!-- Messenger Chat plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "104901011794623");
      chatbox.setAttribute("attribution", "biz_inbox");
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v10.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
    <div class="header">
      <img src="logo.png" alt="logo" id="logo">
      <div class="dropdown">
  <button class="dropbtn" ></button>
  <div class="dropdown-content">
  <a href="index.php">Home</a>
  <a href="#footer">Contact Us</a>
  <a href="about_us.html">About Us</a>
  </div>
</div>
<img src="menu.png" alt="menu" id="menu" width="auto" height="50px">



<p id="Logo">Servio</p>
<form id="searchForm" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<input type="text" name="serviceName" value="" id="inputText" placeholder="Enter Service Name">
<button type="submit">
<img src="search.png" alt="search" width="40px" height="40px" id="searchButton" style="position:absolute;top:19px;left:56em;"/>
</button>
</form>
<select name="forma" onchange="location = this.value;" id="profile">
 <option value="">
<?php
if(!(isset($_SESSION['firstName'])) && !(isset($_SESSION['lastName'])))
{
  echo 'Guest';
  echo '<option value="login.php">sign in</option>';
}
else {
  $fname = $_SESSION['firstName'];
  $lname = $_SESSION['lastName'];
  echo $fname ." ". $lname;
  echo '<option value="edit_profile.php">Profile</option>';
  echo '<option value="add_service.php">Add Service</option>';
  echo '<option value="logout.php">Logout</option>';
}
 ?>
 </option>

</select>

    </div>


<div class="MostOrdered" style="display:none;">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "senior2";
$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql = "SELECT service_id FROM service";
$result = mysqli_query($conn, $sql);
$serviceCount=0;
if (mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_assoc($result))
 {
   $Service_id[$serviceCount] = $row['service_id'];
   $serviceCount++;
 }
}
$k=0;
for($i=0;$i<$serviceCount;$i++)
{
  $sql = "SELECT COUNT(orderId) AS total FROM orderedservices WHERE serviceId=$Service_id[$i]";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  $orderCount[$k] = $row['total'];
  $k++;
}


sort($orderCount);

$feature1 = $orderCount[$k-1];
$feature2 = $orderCount[$k-2];
$feature3 = $orderCount[$k-3];






for($i=0;$i<$serviceCount;$i++)
{
  $sql = "SELECT COUNT(orderId) AS total FROM orderedservices WHERE serviceId=$Service_id[$i]";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);

  if(($row['total'])==$feature1){
  $sql = "SELECT service_name,service_description,banner,service_id FROM service WHERE service_id = '$Service_id[$i]'";
  $result = mysqli_query($conn, $sql);
  $h=0;
  if (mysqli_num_rows($result) > 0){
  while($row = mysqli_fetch_assoc($result))
  {
    $featuredService1[$h] = $row['service_name'];
    $featuredDescription1[$h] = $row['service_description'];
    $featuredBanner1[$h] = $row['banner'];
    $f_id1[$h] = $row['service_id'];
    $h++;
  }
  }
}
else {
  // code...
}
if(($row['total'])==$feature2 && $feature2!=$feature1){
$sql = "SELECT service_name,service_description,banner,service_id FROM service WHERE service_id = '$Service_id[$i]'";
$result = mysqli_query($conn, $sql);
$h=0;
if (mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_assoc($result))
{
  $featuredService2[$h] = $row['service_name'];
  $featuredDescription2[$h] = $row['service_description'];
  $featuredBanner2[$h] = $row['banner'];
  $f_id2[$h] = $row['service_id'];
  $h++;
}
}
}
else{
  $featuredService2[0] = $featuredService1[0];
  $featuredDescription2[0] = $featuredDescription1[0];
  $featuredBanner2[0] = $featuredBanner1[0];
  $f_id2[0] = $f_id1[0];
}

if(($row['total'])==$feature3 && $feature3 != $feature2 && $feature3!=$feature1){
$sql = "SELECT service_name,service_description,banner,service_id FROM service WHERE service_id = '$Service_id[$i]'";
$result = mysqli_query($conn, $sql);
$h=0;
if (mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_assoc($result))
{
  $featuredService3[$h] = $row['service_name'];
  $featuredDescription3[$h] = $row['service_description'];
  $featuredBanner3[$h] = $row['banner'];
  $f_id3[$h] = $row['service_id'];
  $h++;
}
}
}
else{
  $featuredService3[0] = $featuredService2[0];
  $featuredDescription3[0] = $featuredDescription2[0];
  $featuredBanner3[0] = $featuredBanner2[0];
  $f_id3[0] = $f_id1[0];
}
}
 ?>
 <div class="slideshow-container">
<h1 style="text-align:left;color:black;">Most Popular Services</h1>
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
<?php echo '  <img src="images/'.$featuredBanner1[0].'" width="100%;" height="400px;"> '; ?>
  <div style="text-align:center"><?php echo '<span id="featureStyle">'. $featuredService1[0].'</span>'; ?></div>
  <form class="" action="service2.php" method="post">
  <?php echo '  <input type="hidden" value="'.$f_id1[0].'" name="l"> '  ?>
    <button type="submit" id="featureStyle2" name="button" style="width:40%;padding:4px;margin-left:20em;background-color:#3AAFA9">View</button>
  </form>

</div>
<?php
if($feature2!=0){
echo '<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
     <img src="images/'.$featuredBanner2[0].'" width="100%;" height="400px;">
  <div style="text-align:center">'. $featuredService2[0] .'<br> '.$featuredDescription2[0].'</div>
  <form class="" action="service2.php" method="post">
    <input type="hidden" value="'.$f_id2[0].'" name="l">
    <button type="submit" name="button" style="width:100%;height:20px;background-color:#3AAFA9">View</button>
  </form>
</div>';} ?>

<!-- <div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <?php// echo '  <img src="images/'.$featuredBanner2[0].'" width="100%;" height="400px;"> '; ?>
  <div style="text-align:center"><?php// echo $featuredService2[0].'<br>' . $featuredDescription1[0]; ?></div>
  <form class="" action="service2.php" method="post">
    <?php// echo '  <input type="hidden" value="'.$f_id2[0].'" name="l">'  ?>
    <button type="submit" name="button" style="width:100%;height:20px;background-color:#3AAFA9">View</button>
  </form>
</div>-->

<!--
<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <?php //echo '  <img src="images/'.$featuredBanner3[0].'" width="100%;" height="400px;"> '; ?>
  <div style="text-align:center"><?php //echo $featuredService3[0].'<br>' . $featuredDescription1[0] ?></div>
  <form class="" action="service2.php" method="post">
    <?php //echo '  <input type="hidden" value="'.$f_id3[0].'" name="l">'  ?>
    <button type="submit" name="button" style="width:100%;height:20px;background-color:#3AAFA9">View</button>
  </form>
</div>
-->
<?php
if($feature3!=0)
{
  echo'<div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
      <img src="images/'.$featuredBanner3[0].'" width="100%;" height="400px;">
    <div style="text-align:center"> '.$featuredService3[0].' <br> '. $featuredDescription3[0].'</div>
    <form class="" action="service2.php" method="post">
      <input type="hidden" value="'.$f_id3[0].'" name="l">
      <button type="submit" name="button" style="width:100%;height:20px;background-color:#3AAFA9">View</button>
    </form>
  </div>';
}
 ?>
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<!--<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>-->

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>
</div>

<p style="color: black;left:19em;top:11em;" id="Result">
<?php
if(isset($_POST['serviceName'])){
$search1 = $_POST['serviceName'];
echo 'Search> Results for ' . $search1;
}
 ?>
  </p>
<div class="filter">

<form id="Filter_Form" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">




<div class="filterbox" style="margin-left:10px;">
<label for="location" id="labelStyle">Location</label>
<select name="location" id="example" form="Filter_Form">
  <option value="All">All</option>
  <?php
  $strJsonFileContents = file_get_contents("lebanon.json");
  // Convert to array
  $array = json_decode($strJsonFileContents, true);
  for($i=0;$i<26;$i++){
  $value = $array[$i]["city"];
  echo '<option value="'.$value.'">'. $array[$i]["city"]. '</option>';
  }
   ?>
</select>
</div>

<div class="filterbox">
<label for="category" id="labelStyle">Category</label>
<select name="category" id="example" form="Filter_Form">
  <option value="All">All</option>
  <option value="Plumbing">Plumbing</option>
  <option value="Medical">Medical</option>
  <option value="Internet">Internet</option>
</select>
</div>
<!--
<div class="filterbox">
<label for="example" id="labelStyle">Example</label>
<select name="Example" id="example" form="Filter_Form">
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="mercedes">Mercedes</option>
  <option value="audi">Audi</option>
</select>
</div>
-->
<input type="text" name="serviceName" value="" placeholder="search" id="FilterSearch" style="margin-left:150px;">

<!--
<div class="secondRow" style="margin-left:-34px;">
<div class="filterbox">
<label for="example" id="labelStyle">Example</label>
<select name="Example" id="example" form="Filter_Form">
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="mercedes">Mercedes</option>
  <option value="audi">Audi</option>
</select>
</div>

<div class="filterbox">
<label for="example" id="labelStyle">Example</label>
<select name="Example" id="example" form="Filter_Form">
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="mercedes">Mercedes</option>
  <option value="audi">Audi</option>
</select>
</div>

<div class="filterbox">
<label for="example" id="labelStyle">Example</label>
<select name="Example" id="example" form="Filter_Form">
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="mercedes">Mercedes</option>
  <option value="audi">Audi</option>
</select>
</div>

<div class="filterbox">
<label for="example" id="labelStyle">Example</label>
<select name="Example" id="example" form="Filter_Form">
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="mercedes">Mercedes</option>
  <option value="audi">Audi</option>
</select>
</div>
-->
<button type="submit" value="Submit" name="filterButton" id="FilterButton" style="margin-left:10px;"> Filter </button>
</form>
</div>
</div>

<div class="Ads" style="background-color:#DEF2F1;margin-top:-5em;">
  <img src="ad2.jpg" alt="" width="240em;">
  <img src="ad.jpg" alt="" style="margin-top:30px;">
  <!--<img src="ad2.jpg" alt="" width="240em;" style="margin-top:30px;">-->

  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- search2 ad -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-6521100869681726"
     data-ad-slot="5548562074"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>

<div class="Services" style="overflow-x:hidden;overflow-y:auto;margin-bottom:10em;">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "senior2";
$conn = mysqli_connect($servername, $username, $password, $dbname);




if(isset($_POST['serviceName']) && isset($_POST['category'])  && isset($_POST['location']) && isset($_POST['filterButton']))
{

$service_name = $_POST['serviceName'];
$category = $_POST['category'];
//$price = $_POST['price'];
$location = $_POST['location'];
$filter_button = $_POST['filterButton'];
$page = 1;

Filter($service_name, $category, $location, $conn, $page);
}

if(isset($_POST['serviceName']) && !isset($_POST['category']) && !isset($_POST['location']) && !isset($_POST['filterButton']))
{
  $service_name = $_POST['serviceName'];
  $category = "All";
  //$price = "All";
  $location = "All";
  $page = 1;
  Filter($service_name, $category, $location, $conn, $page);
}



function Filter($service_name, $category, $location, $conn, $page)
{






  if($service_name!="" && $category!="All" && $location!="All")
  $sql = "SELECT * FROM `service` WHERE `service_location`='$location' and `service_name`='$service_name' and `service_category`='$category' ";
  elseif($service_name!="" && $category!="All")
  $sql = "SELECT * FROM `service` WHERE `service_name`='$service_name' and `service_category`='$category'";
  elseif($service_name!="" && $location!="All")
  $sql = "SELECT * FROM `service` WHERE `service_name`='$service_name' and `service_location`='$location'";
  elseif($category!="All" && $location!="All")
  $sql = "SELECT * FROM `service` WHERE `service_category`='$category' and `service_location`='$location'";
  elseif($service_name!="")
  $sql = "SELECT * from `service` WHERE `service_name`='$service_name'";
  elseif($location!="All")
  $sql = "SELECT * FROM `service` WHERE `service_location`='$location'";
  elseif($category!="All")
  $sql = "SELECT * FROM `service` WHERE `service_category`='$category'";
  else {
    $sql = "SELECT * FROM `service`";
  }




  $result = mysqli_query($conn, $sql);


  $j=0;
  if (mysqli_num_rows($result) > 0){
  while($row = mysqli_fetch_assoc($result))
   {
     $name[$j] = $row['service_name'];
     $description[$j] = $row['service_description'];
     $banner[$j] = $row['banner'];
     $id[$j] = $row['service_id'];
     $j++;
   }
  }



  if($page==1)
  {
  //if($j<12) $l = $j;
  //else $l=12;
  for($i=0;$i<$j;$i++)
  {

     $sql = "SELECT rating FROM servicefeedback where service_id='$id[$i]'";
     $result = mysqli_query($conn, $sql);
     $k=0;
     $rating=0;
     if (mysqli_num_rows($result) > 0){
     while($row = mysqli_fetch_assoc($result))
     {
       $rating = $row['rating'] + $rating;
       $k++;
     }
     $rating = $rating/$k;
}
    $_SESSION['serviceName'][$i] = $name[$i];
    echo '<div class="center">
      <div class="property-card">
        <a href="#">
        <img src="images/'.$banner[$i].'" alt="" width="250px" height="290px">
        </a>
        <div class="property-description">
          <h5>'.$name[$i].'</h5>
          <p>'. $description[$i] .'</p>
          <p>' . $rating .'</p>
        </div>

          <div class="property-social-icons">
            <!-- I would usually put multipe divs inside here set to flex. Some people might use Ul li. Multiple Solutions -->
            <form action="service2.php" method="post">
            <input type="hidden" name="i" value="'.$i.'">
            <button type="submit" name="button" style="border-radius:5px;background-color:#2B7A78;color:white;font-family:Roboto;">View</button>
            </form>

          </div>
        </a>
      </div>
    </div>
    ';
  }
  }




}


 ?>



</div>
<!--<button type="button" name="previous" id="previous" onclick="previousPage()"> Previous</button>
<button type="button" name="next" id="next" onclick="nextPage()">Next></button>-->
<footer>
       <div class="footer" id="footer" style="background-color:#2B7A78">
   <div class="footer-content">

     <div class="footer-section about">
       <h1 class="logo-text"><span>Serv</span>io</h1>
       <p>
Servio is a platform where users can buy and sell a wide range of services at the click of a button.
       </p>
       <div class="contact">
         <span><i class="fas fa-phone"></i> &nbsp; +961 70 707070</span>
         <span><i class="fas fa-envelope"></i> &nbsp; serviolebanon@gmail.com</span>
       </div>
       <div class="">
         <a href="https://www.facebook.com/Servio-Lebanon-104901011794623/" target="_blank"><i class="fab fa-facebook"></i><img src="facebook-logo.png" alt="facebook" width=50px; height=50px; style=""></a>

         <a href="https://twitter.com/rockobot1" target="_blank"><i class="fab fa-twitter"></i><img src="twitter-logo.png" alt="facebook" width=40px; height=40px;></a>
         <a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i><img src="instagram-logo.png" alt="facebook" width=40px; height=40px;></a>
       </div>
     </div>


     <div class="footer-section contact-form">
       <h2>Contact us</h2>
       <br>
       <form action="contactUs.php" method="post">
         <input type="email" name="email" class="text-input contact-input" placeholder="Your email address..." style="background-color:#FEFFFF;color:black;">
         <textarea rows="4" name="message" class="text-input contact-input" placeholder="Your message..." style="background-color:#FEFFFF;color:black;"></textarea>
         <button type="submit" class="btn btn-big contact-btn" style="border-radius:3px;" onclick=Contact()>
           <i class="fas fa-envelope"></i>
           Send
         </button>
       </form>
       <script type="text/javascript">
         function Contact() {
           alert('thanks for your feedback');
         }
       </script>
     </div>

   </div>

   <div class="footer-bottom">
     &copy; Servio.com | 2021 Senior Project.
   </div>
 </div>
     </footer>
  </body>
</html>
