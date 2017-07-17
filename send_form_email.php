<?php
$myemail = 'jessica.gilbert.1987@gmail.com';//<-----Put Your email address here.

$nameErr = $emailErr = $phoErr = $compErr = $messErr = "";
$name = $email_address = $phone = $message = "";

if (empty($_POST["fullName"])){$nameErr = "Missing";}
	else {$name = $_POST["name"];}
	
if (empty($_POST["email"])){$emailErr = "Missing";}
	else {$email_address = $_POST["email"];}
	
if (empty($_POST["telephone"])){$phoErr = "Missing";}
	else {$phone = $_POST["telephone"];}

if (empty($_POST["companyName"])){$compErr = "Missing";}
	else {$phone = $_POST["companyName"];}
	
if (empty($_POST["comments"])){$messErr = "Missing";}
	else {$message = $_POST["comments"];}

if(empty($errors))
 
{
 
$to = $myemail;
 
$email_subject = "Contact form submission: $name";
 
$email_body = "You have received a new message. ".
 
" Here are the details:\n Name: $name \n ".
 
"Email: $email_address\n Phone: $phone\n Company Name \n $companyName Message \n $message";
 
$headers = "From: $myemail\n";
 
$headers .= "Reply-To: $email_address";
 
mail($to,$email_subject,$email_body,$headers);
 
//redirect to the 'thank you' page
 
header('Location:http://www.jgilbertdesign.com/Client_Files/EQT');
 
}

?>