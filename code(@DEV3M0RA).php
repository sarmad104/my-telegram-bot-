<?php
$Token = ' '; #Your Token
define('API_KEY',$Token);
function bot($method,$datas=[]){
$function = http_build_query($datas);
$url = "https://api.telegram.org/bot".API_KEY."/".$method."?$function";
$function1 = file_get_contents($url);
return json_decode($function1);
}
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$from_id = $message->from->id;
$text = $message->text;
$data = $update->callback_query->data;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id2 =  $update->callback_query->message->message_id;
$user_2 = $update->callback_query->from->username;
$name_2 = $update->callback_query->from->first_name;
$id_2 = $update->callback_query->from->id;
$message_id =  $message->message_id;
$mid = $message->message_id;
$name = $message->from->first_name;
$user = $message->from->username;
$id = $message->from->id;
$sudo =  1372188096; #Sudo Id

if($text == "/start" and $id != $sudo){
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"[$name](tg://user?id=$id) 🧸🤍
*عذراً هذا البوت ليس لك !!* 🙂",
  'disable_web_page_preview'=>'true',
  'parse_mode'=>"MarkDown"
]);
bot('sendMessage',[
    'chat_id'=>$sudo,
    'text'=>" الواد دا دخل البوت[$name](tg://user?id=$id) 😹❤️",
  'disable_web_page_preview'=>'true',
  'parse_mode'=>"MarkDown"
]);
}
$php = str_replace("/php ", "$php", $text);
if($text == "/php $php" and $id == $sudo){
file_put_contents("php.php","<?php $php ?>");
    bot('sendmessage',[
      'chat_id'=>$chat_id,
      'text'=>"*OK Done Code php ✅*" ,
      'parse_mode'=>"Markdown",
      ]);
      }
if($text == "/php" and $id == $sudo or $text == "/STOP" and $id == $sudo){
unlink("php.php");
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"*»» :* [$name](tg://user?id=$id) 🧸🤍

*I stopped All orders successfully* ✅",
  'parse_mode'=>"MarkDown",
]);
}

if($text == "بوت"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"*انا بوت خاص بالمطور عموره فقط لتجربه الاكواد. *",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == 'السورس' || $text == 'سورس' || $text == 'Source'){ 
bot('sendphoto',[
'chat_id'=>$chat_id,
photo =>"https://t.me/BOT3mora",
'caption'=>'*♡*', 
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'𝐃𝐄𝐕 𝐎𝐌𝐀𝐑','url'=>'https://t.me/DEV_0MAR2']],
]])]);} 

if($text == 'المطور' || $text == 'عموره' ){ 
bot('sendphoto',[
'chat_id'=>$chat_id,
photo =>"https://t.me/BOT3mora",
'caption'=>' اليك المطور عموره🖤🔥.', 
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'𝐃𝐄𝐕 𝐎𝐌𝐀𝐑 ','url'=>'https://t.me/DEV_0MAR2']],
]])]);} 

if($text == "🙂"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"😐",
'reply_to_message_id'=>$message->message_id, 
]);
}

include "php.php";