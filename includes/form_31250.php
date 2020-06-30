<?php	
	if(empty($_POST['name_31250']) && strlen($_POST['name_31250']) == 0 || empty($_POST['email_31250']) && strlen($_POST['email_31250']) == 0 || empty($_POST['message_31250']) && strlen($_POST['message_31250']) == 0)
	{
		return false;
	}
	
	$name_31250 = $_POST['name_31250'];
	$email_31250 = $_POST['email_31250'];
	$message_31250 = $_POST['message_31250'];
	$optin_31250 = $_POST['optin_31250'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from a Blocs website.";
	$email_body = "You have received a new message. \n\n".
				  "Name_31250: $name_31250 \nEmail_31250: $email_31250 \nMessage_31250: $message_31250 \nOptin_31250: $optin_31250 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\n";
	$headers .= "Reply-To: $email_31250";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>