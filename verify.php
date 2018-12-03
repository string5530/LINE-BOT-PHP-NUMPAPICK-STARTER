<?php
$access_token = 'BKiBIWjz/ReWaAUfD5hjPESyAlPTvHVqPxe3hEh088ZKIYOwiXYeWQ9/vxRUawahFStq4RJitwL3T1xQxw7YimiM1bLXReDRVivxSkWKAtP/Qppxf+fh2VzBK+dquuzjL5XzMfVtDs5ZOnn8tZwaYQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
