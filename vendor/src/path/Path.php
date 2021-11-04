<?php

namespace path;

class Path
{
    /**
     * set Path access from public folder for css, js, upload and img
     * @param string $path is path in public folder
     * @return string is path file css, js, upload or img
     */
    public static function asset($path)
    {
        if (file_exists(__DIR__ . '/../../../public/' . $path)) {
            return __DIR__ . '/../../../public/' . $path;
        }
        return false;
    }
}