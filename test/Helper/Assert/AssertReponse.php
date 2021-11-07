<?php

namespace Helper\Assert;

use Helper\Http\Response;

class AssertReponse
{
    /**
     * Assert if status code equals
     * @param int $expectedCode is expectation code
     * @param $res is Object Response from request
     * @return true|false
     */
    public static function assertStatusCode(int $expectedCode, Response $res)
    {
        if ($res->getStatusCode() == $expectedCode) {
            return true;
        }
        return false;
    }

    /**
     * Assert if status code equals
     * @param string $contentType is expectation code
     * @param $res is Object Response from request
     * @return true|false
     */
    public  static function assertContentType(string $contentType, Response $res)
    {
        if ($contentType == $res->getContentType()) {
            return true;
        }
        return false;
    }
}
