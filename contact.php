<!DOCTYPE html>
<html>
<head>
<a> <img src="hguhte.png"/> </a>, 100% de toekomst.
<link href="style.css" type="text/css" rel="stylesheet"/>
</head>

<body>

<div class="navigator">
<ul>
<li><a href="index.html"> Home </a></li>
<li><a href="geld.html"> Snel Geld Verdienen </a></li>
<li><a href="bedrijf.html"> Jouw Bedrijf</a></li>
<li><a href="about.html"> Over Guhte </a></li>
<li><a href="contact.html"> Contact Ons! </a></li>
</ul>
</div>

<div id="container">
<div id="content">

<?php
 
if(isset($_POST['email'])) {

    // EDIT THE 2 LINES BELOW AS REQUIRED
$email_to = "justinbot@hotmail.com";
$email_subject = "Guhte email form";

    function died($error) {
 
 // your error code can go here

function died($error) {
// your error code can go here
echo "We are very sorry, but there were error(s) found with the form you submitted. ";
echo "These errors appear below.<br /><br />";
echo $error."<br:";
echo "Please go back and fix these errors.<br /><br />";
die();
}
 
    // validation expected data exists
if(!isset($_POST['name']) ||
!isset($_POST['email']) ||
!isset($_POST['comments'])) {
died('Er is helaas iets misgegaan, probeer het nog een keer.');       
}
 
$name = $_POST['name']; // required
$email_from = $_POST['email']; // required
$comments = $_POST['comments']; // required
 
$error_message = "Er is helaas iets misgegaan, probeer het nog een keer aub.";
$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

if(!preg_match($email_exp,$email_from)) {
$error_message .= 'Je e-mailadres is niet geldig.';
}

$string_exp = "/^[A-Za-z .'-]+$/";
 
if(!preg_match($string_exp,$name)) {
$error_message .= 'Jouw naam is niet geldig. (Gebruik alleen A-Za-z .'-)<br />';
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
 
<h1> We zullen zo nel mogelijk ingaan op jouw bericht! Dankjewel! </h1>

</div>
</div>
<div id="footer">
<footer>
<p> 
<table>
<thead>
<th> Social Media: </th>
<th> Navigatie </th>
</thead>

<tbody>
<td> <ul>
<li> <a href="https://www.twitter.com/GuhteBusiness"> <img src="twitter.png"/> </a> Twitter </li>
<li> <a href="https://www.youtube.com/"> <img src="youtube.png"/> </a> YouTube </li>
<li> <a href="https://www.instagram.com/guhte.business/"> <img src="instagram.png"/> </a> Instagram </li>
<li> <a href="https://www.facebook.com/"> <img src="facebook.png"/> </a> Facebook </li>
<li> <a href="https://www.linkedin.com/"> <img src="linkedin.png"/> </a> LinkedIn </li>
</ul>
</td>

<td>
<ul>
<li><a href="index.html"> Home </a></li>
<li><a href="geld.html"> Snel Geld Verdienen </a></li>
<li><a href="bedrijf.html"> Jouw Bedrijf</a></li>
<li><a href="about.html"> Over Guhte </a></li>
<li><a href="contact.html"> Contact Ons! </a></li>
</ul>
</td>
</tbody>
</p>
</footer>
</div>

</body>

</html>