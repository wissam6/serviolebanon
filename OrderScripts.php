<?php


if((isset($_SESSION["weekday"]))){
  echo'
  <body>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"> </script>
  <script>swal("", "WeekDay Not Available","warning"); </script>
  </body>
    ';
}
if((isset($_SESSION["time1"]))){
  echo'
  <body>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"> </script>
  <script>swal("", "Time taken Or Service Does Not Open During This Hour","warning"); </script>
  </body>
    ';
}
if((isset($_SESSION["time2"]))){
  echo'
  <body>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"> </script>
  <script>swal("", "The service does not open during this hour","warning"); </script>
  </body>
    ';
}
if((isset($_SESSION["oldDate"]))){
  echo'
  <body>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"> </script>
  <script>swal("", "You cant choose an old date","warning"); </script>
  </body>
    ';
}
/*if((isset($_SESSION["no_login"]))){
  echo'
  <body>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"> </script>
  <script>swal("", "You need to login first","warning"); </script>
  </body>
    ';

}*/
/*if((isset($_SESSION["no_login2"]))){
  echo'
  <body>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"> </script>
  <script>swal("", "You need to login first","warning"); </script>
  </body>
    ';

}*/
if(isset($_SESSION['serviceSuccess']))
{
  echo'
  <body>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"> </script>
  <script>swal("", "Order successfully added","success"); </script>
  </body>
    ';
}
if(isset($_SESSION['serviceSuccess2']))
{
  echo'
  <body>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"> </script>
  <script>swal("", "Order successfully added","success"); </script>
  </body>
    ';


}
unset($_SESSION['weekday']);
unset($_SESSION['time1']);
unset($_SESSION['time2']);
unset($_SESSION['no_login']);
unset($_SESSION['serviceSuccess']);
unset($_SESSION['serviceSuccess2']);
unset($_SESSION['oldDate']);
//unset($_SESSION["no_login2"]);

 ?>
