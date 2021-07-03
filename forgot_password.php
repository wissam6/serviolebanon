<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
    html{
      background-color: #2B7A78;
    }
    #email{
      margin-top: 20em;
      margin-left: 45em;
      padding: 14px;
      width: 20%;
    }
    #recover{
      padding: 5px;
      width: 300px;
      margin-left: 49em;
      margin-top: 10px;
      background-color: #3AAFA9;
    }
    #link{

      color: white;
      text-decoration: line-through;
      margin-left: 50em;
    }
    </style>
  </head>
  <body>
    <form class="" action="forgotPasswordBackend.php" method="post">
      <input type="text" name="recoveryEmail" value="" id="email" placeholder="Enter your email"><br>
      <button type="submit" name="Submit" id="recover" value="Recover Password" onclick="showAlert()">Recover</button>
    </form>
    <a href="index.php" id="link">Cancel</a>
    <script type="text/javascript">
      function showAlert() {
        alert('An email will be sent in the next 24 hours');
      }
    </script>
  </body>
</html>
