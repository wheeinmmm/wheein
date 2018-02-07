<?php
$access_token = 'tcPymzYjnFi2ZteKaJamGyqx19ZyEg/RvO45t+GiX16CVUTzMvAJxHehF3GmKCjwe+Ti1LBX07/w6XmrmXeApgqOVimj4siJ4RrDjZm63OwVCDbYDYs+QpNpTTFMN523N6yZiWJpsuFQkNwg80etfgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
?>