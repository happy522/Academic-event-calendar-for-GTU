<?php

$uemail=$_GET['uemail'];
$uname=$_GET['uname'];
$stat=$_GET['stat'];
//$staus= strtoupper($stat);



include('smtp/PHPMailerAutoload.php');
$html='<center> <b>AEC</b>  Academic Event Calendar</center> <hr><br> Hello '.$uname.' ,<br> <p style= "text-indent: 50px;">Please Check your Portal Your Request have been  <b >'.$stat.' </b></p>'; 


echo smtp_mailer($uemail,'AEC Event Status',$html);
function smtp_mailer($to,$subject, $msg){
	$mail = new PHPMailer(); 
	//$mail->SMTPDebug  = 3;
	$mail->IsSMTP(); 
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'tls'; 
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 587; 
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	$mail->Username = "aec.gtu@gmail.com";
	$mail->Password = "Admin@321";
	$mail->SetFrom("aec.gtu@gmail.com");
	$mail->Subject = $subject;
	$mail->Body =$msg;
	$mail->AddAddress($to);
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if(!$mail->Send()){
		echo $mail->ErrorInfo;
	}else{

		echo '<script> alert("Your Mail has been successfully sent");
window.location.href="../views/?v=LIST";
</script>';

	}
}





?>
