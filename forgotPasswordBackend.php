<?php
include('smtp/PHPMailerAutoload.php');


$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "senior2";
$conn  = new mysqli($host,$dbusername,$dbpassword,$dbname);

if(mysqli_connect_error($conn)){
  die('Connect Error('. mysqli_connect_errorno().')'.mysqli_connect_error());
  exit();
}


   if($_SERVER["REQUEST_METHOD"] == "POST"){
   $userEmail = $_POST['recoveryEmail'];
    }


   $verification_password = randomPassword();

function randomPassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array();
    $alphaLength = strlen($alphabet) - 1;
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass);
}
function smtp_mailer($to,$subject, $msg){
	$mail = new PHPMailer();
	$mail->SMTPDebug  = 3;
	$mail->IsSMTP();
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = 'tls';
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 587;
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
  //edit thsese
	// put your email here
  $mail->Username = "serviolebanon@gmail.com";
	$mail->Password = "Senior123";
	$mail->SetFrom("serviolebanon@gmail.com");
  //edit these
	$mail->Subject = $subject;
	$mail->Body = $msg;
	$mail->AddAddress($to);
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));

	if(!$mail->Send()){
		echo $mail->ErrorInfo;
	}else{

    global $userEmail,$verification_password,$conn;

     mysqli_query($conn , " UPDATE `users` SET `password` = '$verification_password' WHERE  `users`.`userEmail` = '$userEmail' ");
		return 'Sent';
	}
}
$message = "Your New Password is"." ".$verification_password.'<br> But please change it in the profile page';
echo  smtp_mailer("$userEmail",'ServioAccount New Password',$message);
header('Location: login.php')
?>
