<?php
$name = $_POST['name'];
$subject = $_POST['subject'];
$mailFrom = $_POST['mail'];
$message = $_POST['message'];

$mailTo = "contactus@saakarstudio.com";
$headers = "From: ".$mailFrom;
$txt = "You have received an e-mail from " .$name.".\n\n".$message;

mail($mailTo, $subject, $txt, $headers);
header("Location: index.html?mailsend");

