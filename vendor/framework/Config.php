<?php

namespace framework;

class Config
{
    protected $config = "";
    protected $driver;
    protected $host;
    protected $port;
    protected $DBName;
    protected $DBUsername;
    protected $DBPassword = '';

    /**
     * @param string $path is to file config in folder config
     * @return array is data get from file in path 
     */
    public function __construct($path = __DIR__ . '/../../config/database.php')
    {
        if (!file_exists($path)) {
            return "Khong tim thay file config tai: " . $path;
        }
        return $this->config = (require(__DIR__ . '/../../config/database.php'));
    }

    /**
     * @param string $path is to file config in folder config
     * @return array is data get from config file
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * is get Driver database for connection
     * @return string is driver database
     */
    public function getDBDriver()
    {
        return $this->driver =  $this->config['connection']['mysql']['driver'];
    }

    /**
     * is get Driver database for connection
     * @return string is host database
     */
    public function getDBHost()
    {
        return $this->host = $this->config['connection']['mysql']['host'];
    }

    /**
     * is get Driver database for connection
     * @return int is port database
     */
    public function getDBPort()
    {
        return $this->port =  $this->config['connection']['mysql']['port'];
    }

    /**
     * is get Driver database for connection
     * @return string is name database
     */
    public function getDBName()
    {
        return $this->port =  $this->config['connection']['mysql']['database'];
    }

    /**
     * is get Driver database for connection
     * @return string is usename database
     */
    public function getDBUsername()
    {
        return $this->port =  $this->config['connection']['mysql']['username'];
    }

    /**
     * is get Driver database for connection
     * @return string is password database
     */
    public function getDBPassword()
    {
        return $this->port =  $this->config['connection']['mysql']['password'];
    }
}
