<?php

header("content-type: application/json; charset=utf-8");
$name=isset($_POST['name']) ? $_POST['name'] : "";
$phone=isset($_POST['phone']) ? $_POST['phone'] : "";
$email=isset($_POST['email']) ? $_POST['email'] : "";
$select=isset($_POST['typeOfCompany']) ? $_POST['typeOfCompany'] : "";
$checkbox1=isset($_POST['checkbox1']) ? $_POST['checkbox1'] : "";
$checkbox2=isset($_POST['checkbox2']) ? $_POST['checkbox2'] : "";
if($name && $email && $phone && $select && $checkbox1 && $checkbox2){
 $headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=utf-8\r\nContent-Transfer-Encoding: 8bit";
 $message_body="Formularz kontaktowy wysłany ze strony S24 pomoc\n";
 $message_body.="Imię i nazwisko: $name\n\n";
 $message_body.="Adres email: $email\n\n";
 $message_body.="Numer telefonu: $phone\n\n";
 $message_body.="Rodzaj Spółki: $select\n\n";
 $message_body.="Zgoda 1: $checkbox1\n\n";
 $message_body.="Zgoda 2: $checkbox2\n\n";
 
 
 if(mail("info@s24pomoc.pl","Formularz kontaktowy",$message_body,$headers)){
 $json=array("status"=>1,"msg"=>"<p class='status_ok'>Twój formularz został pomyślnie wysłany.</p>");
 }
 else{
 $json=array("status"=>0,"msg"=>"<p class='status_err'>Wystąpił problem z wysłaniem formularza.</p>"); 
 }
}
else{
 $json=array("status"=>0,"msg"=>"<p class='status_err'>Proszę wypełnić wszystkie pola przed wysłaniem.</p>"); 
}
echo json_encode($json);
exit;







// $name = $_Post['name'];
// $phone = $_Post['phone'];
// $email = $_Post['email'];
// $select = $_POST['typeOfCompany'];
// $checkbox1 = $_POST['checkbox1'];
// $checkbox2 = $_POST['checkbox2'];

// $emailFrom = 'S24 Pomoc';
// $emailSubject = 'Nowa wiadomość z formularza kontaktowego';
// $emailBody =    "Imię i Nazwisko: $name.\n",
//                 "E-mail: $email.\n",
//                 "Numer telefonu: $phone.\n",
//                 "Rodzaj spółki: $select.\n"
//                 "Zgoda 1: $checkbox1.\n",
//                 "Zgoda 2: $checkbox2.\n";

// $to = "email@email.com";
// $headers = "From: $emailFrom \r\n";
// $headers .= "Reply-To: $email \r\n";

// mail($to,$emailSubject,$emailBody,$headers);

// header("location: index.html");
?>