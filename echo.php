<?php
require_once __DIR__ . '/lineBot.php';
$bot = new Linebot();
$text = $bot->getMessageText();
if($text == "สวัสดี"){
	$text == "สวัสดีจ้าาา"
	$bot->reply($text);
    }
