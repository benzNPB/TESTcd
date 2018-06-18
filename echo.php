<?php
require_once __DIR__ . '/lineBot.php';

$bot = new Linebot();
$text = $bot->getMessageText();
if($text == "สวัสดี"){
	$reply == "สวัสดีจ้าาา"
       $bot->reply($reply);
    }
else {
	
$bot->reply($text);

}


