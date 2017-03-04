


<?php
$to      = 'profirases@gmail.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: mohamedfiras.ouertani@esprit.tn' . "\r\n" .
    'Reply-To: mohamedfiras.ouertani@esprit.tn' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>