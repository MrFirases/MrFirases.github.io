
<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if(!empty($_POST['contact-name']) && !empty($_POST['contact-email']) && !empty($_POST['contact-message'])) {

		$to = 'profirases@gmail.com'; // Replace with your email.
		$body = "Name: {$_POST['contact-name']}\n\nEmail: {$_POST['contact-email']}\n\nMessage: {$_POST['contact-message']}";
		mail($to, "Contact Form Submission", $body, "From: {$_POST['contact-email']}");
	}
}
?>

