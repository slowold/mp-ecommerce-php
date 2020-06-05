<?php
http_response_code(200);

MercadoPago\SDK::setAccessToken('APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398');
MercadoPago\SDK::setIntegratorId('dev_24c65fb163bf11ea96500242ac130004');

file_put_contents("webhook.json","/---------------------------------------------------\\\n",FILE_APPEND);
file_put_contents("webhook.json","Llamada:\n",FILE_APPEND);
file_put_contents("webhook.json","GET:\n",FILE_APPEND);
file_put_contents("webhook.json",json_encode($_GET) . "\n",FILE_APPEND);
file_put_contents("webhook.json","POST:\n",FILE_APPEND);
file_put_contents("webhook.json",json_encode($_POST) . "\n",FILE_APPEND);
file_put_contents("webhook.json","---- Resultado ----\n",FILE_APPEND);

switch($_GET['topic']){
    case 'payment':
        $result = MercadoPago\Payment::find_by_id($_GET['id']);
        break;
    case 'merchant_order':
        $result = MercadoPago\MerchantOrder::find_by_id($_GET['id']);
        break;
    default:
        $result = "Topic no definido.";
    break;
}

file_put_contents("webhook.json",json_encode($result) . "\n",FILE_APPEND);
file_put_contents("webhook.json","\---------------------------------------------------/\n",FILE_APPEND);

?>