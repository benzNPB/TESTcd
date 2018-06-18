<?php
require_once __DIR__ . '/lineBot.ph<p';

$bot = new Linebot();
$text = $bot->getMessageText();
$bot->reply($text);
$userId = $bot->getUserId();
$bot->reply($userId);


?>
