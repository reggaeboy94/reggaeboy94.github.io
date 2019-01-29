<?php 

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$mailFrom = $_POST['mail'];
	$message = $_POST['message'];


	$subject = "Wiadomość ze strony internetowej";
	$mailTo ="bwrobell@op.pl";

	$headers = "Od: ".$mailFrom;
	$txt = "Otrzymałeś wiadomość od ".$name.".\n\n".message; 

	mail($mailTo, $subject, $txt, $headers);
	header("Location: contact.html?mailsend");
}

?>