
<?php
echo 'You are forbidden!';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if(!empty($_POST['contactname']) && !empty($_POST['contactemail']) && !empty($_POST['contactmessage'])) {

		$to = 'profirases@gmail.com'; // Replace with your email.
		$body = "Name: {$_POST['contactname']}\n\nEmail: {$_POST['contactemail']}\n\nMessage: {$_POST['contactmessage']}";
		mail($to, "Contact Form Submission", $body, "From: {$_POST['contactemail']}");
	}
}
?>

