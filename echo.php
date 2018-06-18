<?php
require_once __DIR__ . '/lineBot.php';

$bot = new Linebot();
$text = $bot->getMessageText();
if($text == "สวัสดี"){
	$rply = "text"
	$rply = "สวัสดีจ้าาา"
       $bot->reply($rply);
    }
else {
	
$bot->reply($text);

}


