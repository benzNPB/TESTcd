<?php
 require_once "GoogleTranslate.php";
 require_once __DIR__ . '/lineBot.php';

//$text = $bot->getMessageText();
//$bot->reply($text);

$text = $_REQUEST['word'];
$GT = NEW GoogleTranslate();
$response = $GT->translate('th','en',$text);  /// ตรง en เราสามารถเปลี่ยนเป็น ภาษาอื่นได้
//echo "<pre>";
echo $text."   =   ".$response;
?>
