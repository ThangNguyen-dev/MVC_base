<?php

/**
 * register auto load namespace => spl_autoload_register
 * @param string $classname is auto detect by function spl_autoload_register
 */

spl_autoload_register(function ($classname) {

    /**
     * place charater "\" to "/" to become a path folder
     */
    $classname = str_replace("\\", "/", $classname);

    /**
     * check file exist
     * if exist file in vendor or in app is require else die;
     */

    if (file_exists(__DIR__ . "/../vendor/src/" . $classname . ".php")) {
        require __DIR__ . "/../vendor/src/" . $classname . ".php";
    } elseif (file_exists(__DIR__ . "/../" . $classname . ".php")) {
        require __DIR__ . "/../" . $classname . ".php";
    } else {
        echo "Khong the the tim thay file.";
        die;
    };
});
