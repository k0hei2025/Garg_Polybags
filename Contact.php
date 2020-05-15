<?php

   require('./PHPMailer/PHPMailerAutoload.php');
   
$to = "gargplastic@gmail.com";
$subject = "Enquiry From ";

$name = $_POST['FullName'];
$company = $_POST['CompanyName'];
$emal = $_POST['Email'];
$phone = $_POST['MobileNumber'];
$message = $name." want to contact <br> He/She has <b>Phone Number : </b> ".$phone. "<br><b>Email : <b>".$emal;
$subject .= $name. " ";

$mail = new PHPMailer();
$mail ->IsSmtp();
$mail ->SMTPDebug = 0;
$mail ->SMTPAuth = true;
$mail ->SMTPSecure = 'ssl';
$mail ->Host = "smtp.gmail.com";
$mail ->Port = 465;
$mail ->IsHTML(true);
$mail ->Username = "vaibhavvermaonline@gmail.com";
$mail ->Password = "";
$mail ->SetFrom("Query Solution <support@querysolution.com>");
$mail ->Subject = $subject;
$mail ->Body = $message;
$mail ->AddAddress($to);

if(!$mail->Send())
{
    echo "Mail Not Sent";
}
else
{
    echo "Mail Sent";
}
?>