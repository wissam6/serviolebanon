<?php
 session_start();



 if((isset($_SESSION["InvalidUserEmail"]))){
   echo'
   <body>
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"> </script>
   <script>swal("", "Invalid Username Or Email","warning"); </script>
   </body>
     ';
 }
 if((isset($_SESSION["InvalidPassword"]))){
  echo'
  <body>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"> </script>
  <script>swal("", "Invalid Password","warning"); </script>
  </body>
    ';
}
 if(isset($_SESSION['banned']))
 {
   echo'
   <body>
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"> </script>
   <script>swal("", "You are banned","warning"); </script>
   </body>
     ';
 }
 if(isset($_SESSION['NoCaptcha']))
 {
   echo'
   <body>
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"> </script>
   <script>swal("", "Please fill in the captcha","warning"); </script>
   </body>
     ';
 }

 if (isset($_SESSION["locked"]))
{
    $difference = time() - $_SESSION["locked"];
    if ($difference > 30)
    {
        unset($_SESSION["locked"]);
        unset($_SESSION["login_attempts"]);
        session_destroy();
    }
}
if(isset($_SESSION['login_attempts']))
{
  if ($_SESSION["login_attempts"] > 2)
  {
      $_SESSION["locked"] = time();
      echo'
      <body>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"> </script>
      <script>swal("", "Please wait for 30 seconds and reshresh the page","warning"); </script>
      </body>
        ';
  }
}


unset($_SESSION["InvalidPassword"]);
unset($_SESSION["InvalidUserEmail"]);
unset($_SESSION["banned"]);
unset($_SESSION["NoCaptcha"]);


 ?>
