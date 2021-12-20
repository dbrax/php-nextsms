<?php

namespace Epmnzava\Nextsms;

class Nextsms
{
    public $baseauth;
    public $baseurl;
    public function __construct($baseurl, $username, $password)
    {
        $this->baseauth = base64_encode($username . ":" . $password);
        $this->baseurl = $baseurl;
    }


    public function sendSms($message, $from, $destination)
    {

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->baseurl,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array('from' => $from, 'to' => $destination, 'text' => $message),
            CURLOPT_HTTPHEADER => array(
                'Authorization: Basic ' . $this->baseauth
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
    }

    public function send_sms_mutipledestination($message, $from, $destinationArray)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->baseurl,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array('from' => $from, 'to' => $destinationArray, 'text' => $message),
            CURLOPT_HTTPHEADER => array(
                'Authorization: Basic ' . $this->baseauth
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
    }
}
