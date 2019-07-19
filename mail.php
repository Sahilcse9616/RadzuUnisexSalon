 <?php


$text = "<span style='color:red;'>Error! Please try again.</span>";

if(isset($_POST['submit']))
{
$name=$_POST['username'];
$email=$_POST['txtemail'];
$phone=$_POST['phone'];
$message=$_POST['txtmessage'];


$to = "sharmasahil2017@gmail.com";
$subject = "Contact";
$message = " name: " . $name ."\r\n email: " . $email .  "\r\n phone: " 
. $phone .  "\r\n message:\r\n" . $message;

$from = "Contact";
$headers = "From:" . $email. "\r\n";
$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n";

if(@mail($to,$subject,$message,$headers))
{
echo "<script> window.location.href='index.html'; alert('Send 
Successfully');</script>";
  $text = "<span style='color:blue;'>Your Message was sent successfully 
!</span>";
}
}
?>
