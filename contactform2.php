<?php 

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$mailFrom = $_POST['mail'];
	$message = $_POST['message'];


	$subject = "Wiadomość od ".$mailFrom;
	$mailTo ="barwro1994@gmail.com";

	$headers = "Od: Dashek.pl";
	$txt ="Wiadomość od ".$name.".\n\n".$message;

	mail($mailTo, $subject, $txt, $headers);
	header("Location: index.html");
	
}

?>