<?php

namespace app\Controller;

use app\Model\ModelUser;

class HomeController
{
    public static function home()
    {
        $user = new ModelUser();
    }
}
