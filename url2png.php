<?php
                          
DEFINE("API_KEY", "-Your-API-Key-");
DEFINE("SECRET", "-Your-Secret-");

function url2png($url,$size,$api_key,$secret)
{
    $url = str_replace('%','%25',$url);
    $url = str_replace(' ','%20',$url);
    $url = str_replace('&','%26',$url);
    $url = str_replace('#','%23',$url);
    $url = str_replace('?','%3F',$url);

    $token = md5("$secret+$url");
    return "http://api.url2png.com/v3/$api_key/$token/$size/$url";
}
 
$size = "300x300";
$url  = "nytimes.com";
$src  = url2png($url,$size,API_KEY,SECRET);
$img_tag = sprintf("<img src="%s" title="%s">", $src, $url);
echo $img_tag;
