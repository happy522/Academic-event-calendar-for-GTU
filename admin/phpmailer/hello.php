<?php

$uemail=$_GET['uemail'];
$uname=$_GET['uname'];
$pwd=$_GET['pwd'];


include('smtp/PHPMailerAutoload.php');
$html='<center> <b>AEC</b>  Academic Event Calendar</center> <hr><br> Hello '.$uname.' ,<br> <p style= "text-indent: 50px;">Please use below crendentials for Login <br><b >username :</b>'. $uname.'<br><b>Password : </b>'. $pwd.'</p>'; 


echo smtp_mailer($uemail,'AEC Login Crenditials',$html);
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
	$mail->Username = "virtualpolicestation100@gmail.com";
	$mail->Password = "gareebpurteam@2021";
	$mail->SetFrom("virtualpolicestation100@gmail.com");
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
		return 'Sent';
	}
}





?>
