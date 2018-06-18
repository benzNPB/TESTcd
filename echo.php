<?php
require_once __DIR__ . '/lineBot.php';
    $content = file_get_contents('php://input');
    $arrayJson = json_decode($content, true);
    $arrayHeader = array();
    $arrayHeader[] = "Content-Type: application/json";
    $arrayHeader[] = "Authorization: Bearer {$channelAccessToken}";
$bot = new Linebot();
$text = $bot->getMessageText();
if($text == "สวัสดี")
	{
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "สวัสดีจ้าาา";
       $bot->replyMsg($arrayHeader,$arrayPostData);
    }
else
{
	$bot->reply($text);
}
