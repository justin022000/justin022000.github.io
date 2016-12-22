<!DOCTYPE html>
<html>
<body>

<?php
$to="justin.bot@icloud.com";
$subject="opmerking van Guhte.com";
$naam=$_REQUEST['naam'];
$email=$_REQUEST['email'];
$message=$_REQUEST['opmerking'];
$headers="From: $email";
#sent=mail($to, $subject, $naam, $message, $headers);
if($sent)
{print 'Bedankt voor je opmerking! <a href="contact.html"> Klik hier </a> om terug te gaan naar de vorige pagina';)
else {print "Er is iets misgegaan! Probeer het opnieuw!";}
?>

</html>
</body>