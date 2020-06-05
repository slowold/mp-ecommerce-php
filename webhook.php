<?php
http_response_code(200);
file_put_contents("webhook.json","Llamada:\n",FILE_APPEND);
file_put_contents("webhook.json","GET:\n",FILE_APPEND);
file_put_contents("webhook.json",json_encode($_GET) . "\n",FILE_APPEND);
file_put_contents("webhook.json","POST:\n",FILE_APPEND);
file_put_contents("webhook.json","Llamada:\n",FILE_APPEND);
file_put_contents("webhook.json","---------------------------------------------------",FILE_APPEND);
?>