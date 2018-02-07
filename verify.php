<?php
$access_token = 'twl+4zv3sVFwh0PEs0MTyxNSyGgaq8kz/ychYVkx6avCikUf4kDPymYf4O//LMiLGsMJVU6pKlo7Opj2UY7LGJcyArSWv/t/nRQ24NmBbyj4X5BV+qVo+U0hDAiwa+JaxgPMFm5eUIB+7RCOm/jv4AdB04t89/1O/w1cDnyilFU=';

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