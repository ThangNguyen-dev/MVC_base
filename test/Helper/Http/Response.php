<?php

namespace Helper\Http;

class Response
{
    private $statusCode;
    private $contentType;
    private $body;

    public function __construct($statusCode, $contentType, $body)
    {
        $this->statusCode = $statusCode;
        $this->contentType = $contentType;
        $this->body = $body;
    }

    public function getStatusCode()
    {
        return $this->statusCode;
    }

    public function getContentType()
    {
        return $this->contentType;
    }

    public function getBody()
    {
        return $this->body;
    }

    public function getJson()
    {
        return json_decode($this->getBody(), true);
    }
}
