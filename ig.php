<?php


for ($i= 1; $i <= 1; $i++)
{
    
    $emoj = array("😀","😁","😂","😃","😄","😅","😆","😉","?","😋","😎","😍","😘","😗","😙","😚","☺","🙂","🤔","😐","😑","😶","🙄","😏","😣","😥","😮","😛","😴","😫","😪","😯","🤐","😝","😜","😒","😓","😔","😕","🙃","🤑","😢","😰","😱","😭","😲","🙁","😦","😳","😖","😧","😵","😞","😨","😡","😟","😩"," 😀 ", "😁", "😂", " 😃 "," 😄 "," 😅"," 😆"," 😗"," 😘"," 😍 "," 😎"," 😋"," 😊","  😉"," 😙"," 😚"," ☺"," 🙂"," 🤗"," 🤔"," 😐"," 😑"," 🤐"," 😜"," 😝"," 😯"," 😶"," 🙄"," 😪"," 😒"," 😓"," 😫"," 😏"," 😣"," 😴"," 😔"," 😕"," 😌"," 😥"," 😮"," 😛"," 🙃"," 😷"," 😠"," 😩"," 😬"," 😤"," 😟"," 😞"," 😨"," 😡"," 😵"," 😧"," 😖"," 🙁"," 😦"," 😳"," 😱"," 😭"," 😲"," 🤑"," 😢"," 😰"," 🤒"," 👺"," 💩"," 😺"," 💀"," 🤕"," 😇"," ☠"," 😸"," 😹"," 👻"," 🤓"," 😈"," 👽"," 😻"," 👿"," 👾"," 😼"," 👹"," 🤖"," 😽"," 👶"," 🙊"," 🙉"," 🙈"," 😾"," 😿"," 🙀"," 👦"," 👧"," 👨"," 👩"," 👴"," 👵"," 👮"," 👱"," 👲"," 👳"," 👸"," 👷"," 💂"," 🕵"," 👰"," 💁"," 💃"," 👯"," 🙋"," 👼"," 🎅"," 🙇"," 🛀"," 🛌"," 💆"," 🙍"," 🙎"," 💇"," 🙅"," 🚶"," 🗣"," 🕴"," 👤"," 🏃"," 🙆"," 👥"," 🏊"," 👫"," 👬"," 🏇"," 🏇"," ⛷"," 🏋"," 👭"," 🏂"," 🚴"," 💏"," 🏌"," 🚵",
" 👨",
" ❤","
💋",
" 👨",
" 🏄",
" 🏎",
" 👩",
" ❤","
💋",
" 👩",
" 💑",
" 🏍",
" 🚣",
" 👨❤","
💪"," 👨"," 👧"," 👧"," 👈"," 👉"," ☝"," 🖐"," 🤘"," 👊"," 👋"," 👂"," 💅"," 🙏"," ✊"," 🖖"," ✌"," 👎"," 🙌"," 👐"," 👍"," 👇"," 🖕"," 👌"," 👏"," ✋"," 👆"," ✍"," 👃"," 💋💗"," 💙"," 💘"," 👣"," ❤"," 👁"," 💓"," 💛"," 💚"," 💜"," 💔"," 👁"," 👅"," 💕"," 💝"," 💞"," 💖"," 👄"," 💥"," 💣"," 💢"," 💤"," 💌"," 💟"," 💦"," 💨"," 🕳"," 👓"," 🕶"," 🐵","
🐈"," 🐒"," 🦁"," 🐮"," 🦄"," 🐂"," 🐯"," 🐶"," 🐕"," 🐅"," 🐃"," 🐄"," 🐆"," 🐩"," 🐺"," 🐴"," 🐷"," 🐖"," 🐎"," 🐱"," 🐗",
" 🐽"," 🐏"," 🐑"," 🐐"," 🐪"," 🐫"," 🐇"," 🐰"," 🐹"," 🐼"," 🐀"," 🐁"," 🐭"," 🐘"," 🐿"," 🐻"," 🐨"," 🐔"," 🐚"," 🐙"," 🐡"," 🐳"," 🐧"," 🐦"," 🐥"," 🐤"," 🐣"," 🐓"," 🐌"," ⛅"," 💧"," 🎈",);
// PAnggil EMOT
//1
$motica = $emoj[rand(0,count($emoj)-1)];
$emoji5=($motica); 

    //pesannya APA?
    $Messages = ''.$emoji5.'';
    $target = '';
    $LinkID = '';
    
$headers = array();
$headers[] = "authority: www.instagram.com";
$headers[] = "method: POST";
$headers[] = "path: /web/comments/2898096145361117656/add/";
$headers[] = "scheme: https";
$headers[] = "accept: */*";
$headers[] = "accept-encoding: gzip, deflate, br";
$headers[] = "accept-language: en-US,en;q=0.9";
//$headers[] = "content-length: 56";
$headers[] = "content-type: application/x-www-form-urlencoded";
$headers[] = 'cookie: '.$cookie.'';
$headers[] = "origin: https://www.instagram.com";
$headers[] = "referer: https://www.instagram.com/p/Cg4GxblLaHY/";
$headers[] = "sec-fetch-dest: empty";
$headers[] = "sec-fetch-mode: cors";
$headers[] = "sec-fetch-site: same-origin";
$headers[] = "user-agent: Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Mobile Safari/537.36";
$headers[] = "x-asbd-id: 198387"; //ganti
$headers[] = "x-csrftoken: zLbWeNKBQv9YddKeWFS2hsxbhTYaZ8D6"; //ganti
$headers[] = "x-ig-app-id: 936619743392459"; //ganti
$headers[] = "x-ig-www-claim: hmac.AR1K8lGBCZ5Lgrzi8dnC7hyAhInMgIIutsTxdrjH6RoojG6-"; //ganti
$headers[] = "x-instagram-ajax: 1d6caaf37cd2"; //ganti
$headers[] = "x-requested-with: XMLHttpRequest"; //ganti
$url = 'https://www.instagram.com/'; //ganti




$post = 'comment_text='.urlencode($Messages).'&replied_to_comment_id=';
$post = json_decode(yarzCurl($url, $post, false, $headers, true));
if(isset($post->id))
{
echo "ID Komen = ".$post->id." 
Status: ".$post->status.""; 
} else {
	die(print_r($post->status));
}

}
function yarzCurl($url, $fields=false, $cookie=false, $httpheader=false, $encoding=false)
{
sleep(67);
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	if($fields !== false)
	{
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
	}
	if($encoding !== false)
	{
		curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
	}
	if($cookie !== false)
	{
		curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
		curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
	}
	if($httpheader !== false)
	{
		curl_setopt($ch, CURLOPT_HTTPHEADER, $httpheader);
	}
	$response = curl_exec($ch);
	curl_close($ch);
	return $response;



}
