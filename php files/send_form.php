<?php

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$select = $_POST['typeOfCompany'];
$checkbox1 = $_POST['checkbox1'];
$checkbox2 = $_POST['checkbox2'];

$emailFrom = 'Formularz S24 Pomoc';
$emailSubject = 'Wiadomość z formularza kontaktowego S24 Pomoc';
$emailBody  = "Imię i Nazwisko: $name\n\n".
  "Numer telefonu: $phone\n\n".
  "E-mail: $email\n\n".
  "Rodzaj spółki: $select\n\n".
  "Zgoda 1: $checkbox1\n\n".
  "Zgoda 2: $checkbox2\n\n";

$to = "futerro2@gmail.com";
$headers = "From: $emailFrom \r\n";
$headers .= "Reply-To: $email \r\n";

mail($to,$emailSubject,$emailBody,$headers);

header("location: index.html");
?>