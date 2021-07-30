$text = "今天我很开心（@大大的微笑）";
$text = preg_replace('/（@.*?）/', '', $text);
echo $text;


