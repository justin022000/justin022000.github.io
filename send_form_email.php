(!DOCTYPE html)
<html>
<head> 
Guhte
</head>

<body>

<?php
 
if(isset($_POST['email'])) {

    // EDIT THE 2 LINES BELOW AS REQUIRED
$email_to = "justin.bot@icloud.com";
$email_subject = "Guhte email form";

    function died($error) {
 
 // your error code can go here

echo "Er is helaas iets misgegaan, probeer het nog een keer. ";
die();
}
 
    // validation expected data exists
if(!isset($_POST['name']) ||
!isset($_POST['email']) ||
!isset($_POST['comments'])) {
died('Er is helaas iets misgegaan, probeer het nog een keer.');       
}
 
$name = $_POST['first_name']; // required
$email_from = $_POST['email']; // required
$comments = $_POST['comments']; // required
 
$error_message = "";
$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

if(!preg_match($email_exp,$email_from)) {
$error_message .= 'Je e-mail is niet geldig.<br />';
}

$string_exp = "/^[A-Za-z .'-]+$/";
 
if(!preg_match($string_exp,$first_name)) {
$error_message .= 'Jouw naam is niet geldig. (Gebruik alleen de letters, punten, apostrof en streepjes (-))<br />';
}
 
if(strlen($comments) < 2) {
$error_message .= 'Heb jij wel iets ingevuld bij de opmerking?'.<br />';
}

if(strlen($error_message) > 0) {
died($error_message);
}

$email_message = "Form details below.\n\n";

function clean_string($string) {
$bad = array("content-type","bcc:","to:","cc:","href");
return str_replace($bad,"",$string);
}
 
$email_message .= "Name: ".clean_string($name)."\n";
$email_message .= "Email: ".clean_string($email_from)."\n";
$email_message .= "Comments: ".clean_string($comments)."\n";
     
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- include your own success html here -->
 
We zullen zo nel mogelijk ingaan op jouw bericht! Dankjewel!

<?php
}
?>

</body>
</html>