<?php
/**
 * Created by messageapi.
 */

namespace messageapi;


class messageapi
{


    public $customers;
    public $integrations;
    public $webhooks;
    public $messages;
    public $media;

    public function __construct($authorization)
    {


        $this->customers = new customersObj($authorization);
        $this->integrations = new integrationsObj($authorization);
        $this->webhooks = new webhooksObj($authorization);
        $this->messages = new messagesObj($authorization);
        $this->media = new mediaObj($authorization);

    }


}

class RunAPI
{
    private $domain = 'https://api.messageapi.im';
    private $verApi = 'v1';
    private $_authorization;

    public function __construct($authorization)
    {
        $this->_authorization = $authorization;
    }

    public function exe($collection, $method, $ID, $data)
    {
        $url = $this->domain . '/' . $this->verApi . '/' . $collection;
        if ($ID)
            $url = $url . "/" . $ID;
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
//        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        $headers = array();
        $headers[] = "Authorization: " . $this->_authorization;
        $headers[] = "Content-Type: application/json";
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);

        $curlErr = curl_errno($ch);
        curl_close($ch);
        if ($curlErr) {
            return 'Error:' . $curlErr;
        } else {
            return $result;
        }

    }

}

class customersObj extends RunAPI
{
    function GetAll()
    {
        return RunAPI::exe('customers', 'GET', null, null);
    }

    function Get($id)
    {
        return RunAPI::exe('customers', 'GET', $id, null);
    }

    function Create($data)
    {
        return RunAPI::exe('customers', 'POST', null, $data);
    }

    function Update($id, $data)
    {
        return RunAPI::exe('customers', 'PUT', $id, $data);
    }

    function Remove($id)
    {
        return RunAPI::exe('customers', 'DELETE', $id, null);
    }
}

class integrationsObj extends RunAPI
{
    function GetAll()
    {
        return RunAPI::exe('integrations', 'GET', null, null);
    }

    function Get($id)
    {
        return RunAPI::exe('integrations', 'GET', $id, null);
    }

    function Create($data)
    {
        return RunAPI::exe('integrations', 'POST', null, $data);
    }

    function Update($id, $data)
    {
        return RunAPI::exe('integrations', 'PUT', $id, $data);
    }

    function Remove($id)
    {
        return RunAPI::exe('integrations', 'DELETE', $id, null);
    }
}

class webhooksObj extends RunAPI
{
    function GetAll()
    {
        return RunAPI::exe('webhooks', 'GET', null, null);
    }

    function Get($id)
    {
        return RunAPI::exe('webhooks', 'GET', $id, null);
    }

    function Create($data)
    {
        return RunAPI::exe('webhooks', 'POST', null, $data);
    }

    function Update($id, $data)
    {
        return RunAPI::exe('webhooks', 'PUT', $id, $data);
    }

    function Remove($id)
    {
        return RunAPI::exe('webhooks', 'DELETE', $id, null);
    }
}

class messagesObj extends RunAPI
{
    function GetNewMessages()
    {
        return RunAPI::exe('messages', 'GET', null, null);
    }

    function SendMessage($data)
    {
        return RunAPI::exe('messages', 'POST', null, $data);
    }

}

class mediaObj extends RunAPI
{
    function DownloadMedia($messageid)
    {
        return  file_put_contents("itzik.png", RunAPI::exe('media', 'GET', $messageid, null));

    }


}