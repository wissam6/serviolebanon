<?php
 session_start();

 if(isset($_SESSION["login"])){
   echo'
   <body>
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"> </script>
   <script>swal("", "You have successfully Created Your Account!","success"); </script>
   </body>
     ';
 }
 else if(isset($_SESSION["phonenumber"])){
   echo'
   <body>
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"> </script>
   <script>swal("", "Entered phone number is already used please enter different one.","warning"); </script>
   </body>
     ';
 }
 else if(isset($_SESSION["email"])) {
   echo'
   <body>
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"> </script>
   <script>swal("", "Email is already used please enter a different one.","warning"); </script>
   </body>
     ';
 }
 else if(isset($_SESSION["username"])){
   echo'
   <body>
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"> </script>
   <script>swal("", "Username is already used please enter a diffrent one.","warning"); </script>
   </body>
     ';
 }
 else if(isset($_SESSION["emailform"])){
   echo'
   <body>
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"> </script>
   <script>swal("Error", "This is not a correct form of a email address!","error"); </script>
   </body>
     ';
 }
 else if(isset($_SESSION["checkpassword"])){
   echo'
   <body>
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"> </script>
   <script>swal("Error", "The confirmation password does not match password you entred!","error"); </script>
   </body>
     ';
 }
 else if(isset($_SESSION["phonenumberform"])){
   echo'
   <body>
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"> </script>
   <script>swal("Error", "The is not a correct form of a phone number!","error"); </script>
   </body>
     ';
 }
 else if(isset($_SESSION["pass_length"])){
   echo'
   <body>
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"> </script>
   <script>swal("", "Password should contain 8 characters!","warning"); </script>
   </body>
     ';
 }
 else if(isset($_SESSION["pass_specialchars"])){
   echo'
   <body>
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"> </script>
   <script>swal("", "Password should contain special characters!","warning"); </script>
   </body>
     ';
 }
 else if(isset($_SESSION["pass_numbers"])){
   echo'
   <body>
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"> </script>
   <script>swal("", "Password should contain atleast one number!","warning"); </script>
   </body>
     ';
 }
 else if(isset($_SESSION["pass_lowercase"])){
   echo'
   <body>
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"> </script>
   <script>swal("Password Error", "Password should contain atleast one lowercase!","warning"); </script>
   </body>
     ';
 }
 else if(isset($_SESSION["pass_uppercase"])){
   echo'
   <body>
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"> </script>
   <script>swal("Password Error", "Password should contain atleast one uppercase!","warning"); </script>
   </body>
     ';
 }
 session_destroy();
 ?>
