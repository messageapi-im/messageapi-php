<?php
/**
 * Created by messageapi.
 */
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

error_reporting(E_ALL);



require_once ('messageapi.php');
$messageapi=new \messageapi\messageapi('<YOUR_APP_SECRET>');

//echo $messageapi->customers->GetAll();
//echo $messageapi->customers->Get('<ID_CUSTOMER>');
//echo $messageapi->customers->Create('{"email":"david@bon.com"}');
//echo $messageapi->customers->Update('<ID_CUSTOMER>','{"email":"david@bon.com"}');
//echo $messageapi->customers->Remove('<ID_CUSTOMER>');

//echo $messageapi->integrations->GetAll();
//echo $messageapi->integrations->Get('<ID_INTEGRATION>');
//echo $messageapi->integrations->Create('{"type":"viber"}');
//echo $messageapi->integrations->Update('<ID_INTEGRATION>','{"email":"david@bon.com"}');
//echo $messageapi->integrations->Remove('<ID_INTEGRATION>');

//echo $messageapi->webhooks->GetAll();
//echo $messageapi->webhooks->Get('<ID_WEBHOOK>');
//echo $messageapi->webhooks->Create('{"webhook_url":"https://testurl.com"}');
//echo $messageapi->webhooks->Update('<ID_WEBHOOK>','{"webhook_url":"https://testurl.com"}');
//echo $messageapi->webhooks->Remove('<ID_WEBHOOK>');

//echo $messageapi->messages->GetNewMessages();
//echo $messageapi->messages->SendMessage('{"webhook_url":"https://bb.com"}');
echo $messageapi->media->DownloadMedia('12346');


