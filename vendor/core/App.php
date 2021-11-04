<?php

namespace core;

class App
{

    public function __construct()
    {
        $this->startSession();
        $this->getWeb();
    }

    /**
     * is function start session. Save data in session
     * @return true if success
     * @return false if failed
     */
    public function startSession()
    {
        if (session_start()) {
            return true;
        }
        return false;
    }

    public function getWeb()
    {
        require __DIR__ . "../../../routes/web.php";
    }
}
