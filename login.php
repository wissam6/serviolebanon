<!DOCTYPE html>
<html>

    <head>
      <link rel="icon" href="logo.png">
        <script src='https://www.google.com/recaptcha/api.js'></script>
        <style media="screen">
        body
        {
          background-image: url("bg.gif");
          background-repeat: no-repeat;
          background-size: cover;
        }
        </style>

        <title>SERVIO</title>

        <link rel="stylesheet" href="style.css">
        <link href="http://fonts.cdnfonts.com/css/roobert" rel="stylesheet">
        <?php include('loginScripts.php'); ?>

        <style>
        .forgot_link
        {
            color: white;
            position: absolute;
            top: 16em;
            left: 2em;
        }
        </style>

    </head>

    <body>
 <div class="bg">
        <div class="form_div">

       <form action="sign_in.php" class="login_form" method="POST">

                <div class="split left2">

                    <div class="centered">

                        <div class="login_logo"></div>

                    </div>

                </div>

                <div class="split right">

                    <div class="centered">

                        <span><h2>Login</h2></span>

                        <input type="text" class="username_email" name="username_email" placeholder="Username or Email" required>

                        <input type="password" class="login_password" name="login_password" placeholder="Password" required>

                        <input type="submit" class="login_button" value="Login" <?php
                        if(isset($_SESSION['login_attempts']))
                        {
                          if($_SESSION["login_attempts"] > 2) { ?> disabled else enabled<?php
                        }
                             } ?> >


                        <a href="signup.php" class="signup_link">Don't have an account? Sign Up!</a>
                        <a href="forgot_password.php" class="forgot_link">Forgot Password?</a>
                        <div class="g-recaptcha" data-sitekey="6LcSRrsaAAAAANtuy_xkJ9IMvFYrMu7C3pCpyFSF" style="position:absolute;top:18em;left:-4em;"></div>

                    </div>

                </div>
</div>

            </form>

        </div>
        <?php
        if((isset($_SESSION["no_login"]))){
          echo'
          <body>
          <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"> </script>
          <script>swal("", "You need to login first","warning"); </script>
          </body>
            ';

        }
         ?>

    </body>

</html>
