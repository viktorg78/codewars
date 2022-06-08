<?php

namespace api;


class SendRequestJson extends Request
{

    /**
     * @see Request
     */
    public static function create($url, $data, $method='POST'): string
    {
        $data_string = json_encode ($data, JSON_UNESCAPED_UNICODE);
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $method);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($data_string))
        );
        $result = curl_exec($curl);
        curl_close($curl);
        return $result;
    }

}