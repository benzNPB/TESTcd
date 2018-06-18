<?php
require_once __DIR__ . '/lineBot.php';
$bot = new Linebot();
$text = $bot->getMessageText();
if($text == "สวัสดี"){
	$text['messages'][0]['type'] = "text";
     $text['messages'][0]['text'] = "สวัสดีจ้าาา";
	$bot->reply($text);
    }
else{
	$bot->reply($text);
}
