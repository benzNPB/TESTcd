<?php
require_once __DIR__ . '/lineBot.php';
$bot = new Linebot();
$text = $bot->getMessageText();
if($text == "สวัสดี")
	{
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "สวัสดีจ้าาา";
        replyMsg($arrayHeader,$arrayPostData);
    }
else
{
	$bot->reply($text);
}