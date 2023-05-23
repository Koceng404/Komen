<?php

//error_reporting(0);

date_default_timezone_set("Asia/JAKARTA"); 
$jam = date('H:i');

    for ($i= 1; $i <= 3; $i++)
{


sleep(rand(6, 17));
    
    $lope = array('💛','🧡','❤️','💚','💙','💜','🖤','🤎','🤍','💔','❣','️','💕','💞','💓','💗','💖','💘','💝☮','💟','🟡','🟨');
    $love = $lope[rand(0,count($lope)-1)];
    $ovee=($love); 

$motic = array("😀","😁","😂","😃","😄","😅","😆","😉","?","😋","😎","😍","😘","😗","😙","😚","☺","🙂","🤔","😐","😑","😶","🙄","😏","😣","😥","😮","😛","😴","😫","😪","😯","🤐","😝","😜","😒","😓","😔","😕","🙃","🤑","😢","😰","😱","😭","😲","🙁","😦","😳","😖","😧","😵","😞","😨","😡","😟","😩"," 😀 ", "😁", "😂", " 😃 "," 😄 "," 😅"," 😆"," 😗"," 😘"," 😍 "," 😎"," 😋"," 😊","  😉"," 😙"," 😚"," ☺"," 🙂"," 🤗"," 🤔"," 😐"," 😑"," 🤐"," 😜"," 😝"," 😯"," 😶"," 🙄"," 😪"," 😒"," 😓"," 😫"," 😏"," 😣"," 😴"," 😔"," 😕"," 😌"," 😥"," 😮"," 😛"," 🙃"," 😷"," 😠"," 😩"," 😬"," 😤"," 😟"," 😞"," 😨"," 😡"," 😵"," 😧"," 😖"," 🙁"," 😦"," 😳"," 😱"," 😭"," 😲"," 🤑"," 😢"," 😰"," 🤒"," 👺"," 💩"," 😺"," 💀"," 🤕"," 😇"," ☠"," 😸"," 😹"," 👻"," 🤓"," 😈"," 👽"," 😻"," 👿"," 👾"," 😼"," 👹"," 🤖"," 😽"," 👶"," 🙊"," 🙉"," 🙈"," 😾"," 😿"," 🙀"," 👦"," 👧"," 👨"," 👩"," 👴"," 👵"," 👮"," 👱"," 👲"," 👳"," 👸"," 👷"," 💂"," 🕵"," 👰"," 💁"," 💃"," 👯"," 🙋"," 👼"," 🎅"," 🙇"," 🛀"," 🛌"," 💆"," 🙍"," 🙎"," 💇"," 🙅"," 🚶"," 🗣"," 🕴"," 👤"," 🏃"," 🙆"," 👥"," 🏊"," 👫"," 👬"," 🏇"," 🏇"," ⛷"," 🏋"," 👭"," 🏂"," 🚴"," 💏"," 🏌"," 🚵"," 👨"," ❤","
💋"," 👨"," 🏄"," 🏎"," 👩"," ❤","
💋"," 👩"," 💑"," 🏍"," 🚣"," 👨❤","💪"," 👨"," 👧"," 👧"," 👈"," 👉"," ☝"," 🖐"," 🤘"," 👊"," 👋"," 👂"," 💅"," 🙏"," ✊"," 🖖"," ✌"," 👎"," 🙌"," 👐"," 👍"," 👇"," 🖕"," 👌"," 👏"," ✋"," 👆"," ✍"," 👃"," 💋💗"," 💙"," 💘"," 👣"," ❤"," 👁"," 💓"," 💛"," 💚"," 💜"," 💔"," 👁"," 👅"," 💕"," 💝"," 💞"," 💖"," 👄"," 💥"," 💣"," 💢"," 💤"," 💌"," 💟"," 💦"," 💨"," 🕳"," 👓"," 🕶"," 🐵","
🐈"," 🐒"," 🦁"," 🐮"," 🦄"," 🐂"," 🐯"," 🐶"," 🐕"," 🐅"," 🐃"," 🐄"," 🐆"," 🐩"," 🐺"," 🐴"," 🐷"," 🐖"," 🐎"," 🐱"," 🐗",
" 🐽"," 🐏"," 🐑"," 🐐"," 🐪"," 🐫"," 🐇"," 🐰"," 🐹"," 🐼"," 🐀"," 🐁"," 🐭"," 🐘"," 🐿"," 🐻"," 🐨"," 🐔"," 🐚"," 🐙"," 🐡"," 🐳"," 🐧"," 🐦"," 🐥"," 🐤"," 🐣"," 🐓"," 🐌"," ⛅"," 💧"," 🎈",);
     $motic1 = $motic[rand(0,count($motic)-1)];
     
     $emoticon=($motic1); 

$filecounter=("counter1.txt");
$kunjungan=file($filecounter);
$kunjungan[0]++;


$file=fopen($filecounter,"w");
fputs($file,"$kunjungan[0]");
fclose($file);


$angka = file_get_contents('counter1.txt');
$angka_format = number_format($angka,0,",",".");

/*
$ngawur = array('ab','b','c');
$uh = $ngawur[rand(0,count($ngawur)-1)];
$gombal=($uh); 
*/
include 'atur.php';


$url       = 'https://m.facebook.com/a/comment.php?fs=7&actionsource=2&comment_logging&ft_ent_identifier='.$target.'';
$headers   = array(
    'authority: mbasic.facebook.com',
    'method: POST',
    'path: /a/comment.php?fs=7&actionsource=13&comment_logging&ft_ent_identifier=1282213665580829&refid=52',
'scheme: https',
'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
'accept-encoding: gzip, deflate, br',
'accept-language: en-US,en;q=0.9',
'cache-control: max-age=0',
'content-type: application/x-www-form-urlencoded',
'cookie: '.$cookie,
'origin: https://mbasic.facebook.com',
'referer: https://www.facebook.com',
'sec-ch-ua: " Not A;Brand";v="99", "Chromium";v="96", "Google Chrome";v="96"',
'sec-ch-ua-mobile: ?0',
'sec-ch-ua-platform: "Windows"',
'sec-fetch-dest: document',
'sec-fetch-mode: navigate',
'sec-fetch-site: same-origin',
'sec-fetch-user: ?1',
'upgrade-insecure-requests: 1',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.93 Safari/537.36',
);
$post ="fb_dtsg=".$dtsg."&jazoest=25399&comment_text=".urlencode($jawaban)."".urlencode($angka_format)."";
$post      = json_decode(yarzCurl($url, $post, false, $headers, true));
}



    
print '<pre>'.print_r($post,1).'</pre>'; die();

function yarzCurl($url, $fields = false, $cookie = false, $httpheader = false, $encoding = false)


{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    if ($fields !== false) {
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
    }
    if ($encoding !== false) {
        curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
    }
    if ($cookie !== false) {
        curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
        curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
    }
    if ($httpheader !== false) {
        curl_setopt($ch, CURLOPT_HTTPHEADER, $httpheader);
    }

      
    
    $response = curl_exec($ch);
    curl_close($ch);
    return $response;
} 

 ?>
