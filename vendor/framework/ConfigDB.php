<?php

namespace framework;

class ConfigDB
{
    protected $config = "";
    protected $driver;
    protected $host;
    protected $port;
    protected $DBName;
    protected $DBUsername;
    protected $DBPassword = '';

    /**
     * is get Driver database for connection
     * @return string is driver database
     */
    public static function getDBDriver()
    {
        $config = explode('\'', file_get_contents(__DIR__ . '/../../config/database.php'));
        return $config[7];
    }

    /**
     * is get Driver database for connection
     * @return string is host database
     */
    public static function getDBHost()
    {
        $config = explode('\'', file_get_contents(__DIR__ . '/../../config/database.php'));
        return $config[15];
    }

    /**
     * is get Driver database for connection
     * @return int is port database
     */
    public static function getDBPort()
    {
        $config = explode('\'', file_get_contents(__DIR__ . '/../../config/database.php'));
        return $config[19];
    }

    /**
     * is get Driver database for connection
     * @return string is name database
     */
    public static function getDBName()
    {
        $config = explode('\'', file_get_contents(__DIR__ . '/../../config/database.php'));
        return $config[23];
    }

    /**
     * is get Driver database for connection
     * @return string is usename database
     */
    public static function getDBUsername()
    {
        $config = explode('\'', file_get_contents(__DIR__ . '/../../config/database.php'));
        return $config[27];
    }

    /**
     * is get Driver database for connection
     * @return string is password database
     */
    public static function getDBPassword()
    {
        $config = explode('\'', file_get_contents(__DIR__ . '/../../config/database.php'));
        return $config[31];
    }
}
