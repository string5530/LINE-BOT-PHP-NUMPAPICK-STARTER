 <?php
  

function send_LINE($msg){
 $access_token = 'BKiBIWjz/ReWaAUfD5hjPESyAlPTvHVqPxe3hEh088ZKIYOwiXYeWQ9/vxRUawahFStq4RJitwL3T1xQxw7YimiM1bLXReDRVivxSkWKAtP/Qppxf+fh2VzBK+dquuzjL5XzMfVtDs5ZOnn8tZwaYQdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'U114b815f9f555def14e46e4f97cf7ce0',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
