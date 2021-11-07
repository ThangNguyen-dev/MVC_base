<?php

namespace Helper\Http;

use Helper\Http\Response;

class Request
{
    protected $config;

    public function __construct()
    {
    }

    /**
     * created requeset to server
     * @param string $method is method request to server
     * @param string $url is base url to request.
     * @return array is data response from request
     */
    public function request(string $method, string $url)
    {
        $curl = curl_init();

        // set url to curl
        curl_setopt($curl, CURLOPT_URL, $url);

        // set method to request to server
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, strtoupper($method));

        // return data as a string
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        // request return header code
        curl_setopt($curl, CURLOPT_HEADER, true);

        $res = curl_exec($curl);

        /**
         * check error curl
         * return array error and message
         *  */
        if ($res == false) {
            return [
                'error' => 'true',
                'mesage' => curl_error($curl)
            ];
        }

        // get header code return
        $statusCode = curl_getinfo($curl, CURLINFO_RESPONSE_CODE);

        // get content type
        $contentType = curl_getinfo($curl, CURLINFO_CONTENT_TYPE);

        // get header size in body
        $header_size = curl_getinfo($curl, CURLINFO_HEADER_SIZE);

        // get header from body
        $header = substr($res, 0, $header_size);

        // get body
        $body = substr($res, $header_size);

        $reponse = new Response($statusCode, $contentType, $body);
        return $reponse;
    }

    /**
     * GET method to request to server
     * @param string $url is base url to request to server
     * @return object response after done request.
     */
    public function get($url)
    {
        return $this->request('GET', $url);
    }

    /**
     * POST method to request to server
     * @param string $url is base url to request to server
     * @return object response after done request.
     */
    public function post($url)
    {
        return $this->request("POST", $url);
    }

    /**
     * POST method to request to server
     * @param string $url is base url to request to server
     * @return object response after done request.
     */
    public function put($url)
    {
        return $this->request("PUT", $url);
    }
}
