<? php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST[message];

$email_form = "$visitor_email";
$email_subject = "Bhutan Note-Sheet"
$email_body = "Sender Name: $name.\n";
"Email Of Sender: $visitor_email.\n";
"Message: $message.\n";

$to="sdorji815@gmail.com";
$headers ="From: $email_form \r\n";
$headers = "Reply-To: $visitor_email \r\n";

mail($to, $email_subject, $email_body,$headers);

header("Location:about")
?>