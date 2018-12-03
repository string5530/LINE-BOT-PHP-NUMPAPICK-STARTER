<?php
$access_token = 'u5kusnGIRgqS89b/NMYDq4i8qYUATxRHkYmexuc9Q8MFvVtLVDYTNMagcfQZ0LOvFStq4RJitwL3T1xQxw7YimiM1bLXReDRVivxSkWKAtNbSUNui67JXCnfEDDJF6U8Hc5rfAieI+NGIRJHbZV/ZQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
