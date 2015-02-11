<?php //require("phpmailer/class.phpmailer.php"); ?>
<?php 
include_once '/phpmailer/PHPMailerAutoload.php';

$mail             = new PHPMailer();

//$body             = file_get_contents('contents.html');
//$body             = eregi_replace("[\]",'',$body);

$mail->IsSMTP(); // telling the class to use SMTP
$mail->Host       = "mail.yourdomain.com"; // SMTP server
$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
                                           // 1 = errors and messages
                                           // 2 = messages only
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "tls";                 // sets the prefix to the servier
$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
//$mail->Port       = 587;                   // set the SMTP port for the GMAIL server
$mail->Username   = "prathamesh.kakade18@gmail.com";  // GMAIL username
$mail->Password   = "";            // GMAIL password

$mail->SetFrom('prathamesh.kakade18@gmail.com', 'First Last');

$mail->AddReplyTo("prathamesh.kakade18@gmail.com","First Last");

$mail->Subject    = "PHPMailer Test Subject via smtp (Gmail), basic";

$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
$body = "Hi!";
$mail->MsgHTML($body);

$address = "prathamesh.kakade18@gmail.com";
$mail->AddAddress($address, "John Doe");

//$mail->AddAttachment("images/phpmailer.gif");      // attachment
//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment

if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Message sent!";
}

//$mail = new PHPMailer();
//$mail->IsSMTP(); // send via SMTP
////IsSMTP(); // send via SMTP
//$mail->SMTPAuth = true; // turn on SMTP authentication
//$mail->Username = "prathamesh.kakade18@gmail.com"; // SMTP username
//$mail->Password = ""; // SMTP password
//$webmaster_email = "prathamesh.kakade18@gmail.com"; //Reply to this email ID
//$email="prathamesh.kakade18@gmail.com"; // Recipients email ID
//$name="name"; // Recipient's name
//$mail->From = $webmaster_email;
//$mail->FromName = "Webmaster";
//$mail->AddAddress($email,$name);
//$mail->AddReplyTo($webmaster_email,"Webmaster");
//$mail->WordWrap = 50; // set word wrap
////$mail->AddAttachment("/var/tmp/file.tar.gz"); // attachment
////$mail->AddAttachment("/tmp/image.jpg", "new.jpg"); // attachment
//$mail->IsHTML(true); // send as HTML
//$mail->Subject = "This is the subject";
//$mail->Body = "Hi,
//This is the HTML BODY "; //HTML Body
//$mail->AltBody = "This is the body when user views in plain text format"; //Text Body
//if(!$mail->Send())
//{
//echo "Mailer Error: " . $mail->ErrorInfo;
//}
//else
//{
//echo "Message has been sent";
//}
