<?php
// https://api.telegram.org/bot6303402880:AAEoWvZBoY082E9c0BJui4-_IcUoAmoENEo/getUpdates

$name = $_POST['user_name'];
$surname = $_POST['sur_name'];
$email = $_POST['user_email'];
$user_info = $_POST['info'];
$token = "6303402880:AAEoWvZBoY082E9c0BJui4-_IcUoAmoENEo";
$chat_id ="-824847456";
$arr = array(
    'Your Name: ' => $name,
    'Your Surname' => $surname,
    'Your Email' => $email,
    'Information' => $user_info
);

foreach($arr as $key => $value){
    $txt .="<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMassage?chat_id={$chat_id}
&parse_mode=html&text={$txt}","r");

if($sendToTelegram){
    header('Location:thank-you.html');
} else{
    echo"Error";
}
?>
