<?php

    // ? Start session for displayMessage() (Helper Functions)
    session_start();

    require_once 'config.php';

    // ? Including helpers

    require_once 'helpers/system_helper.php';

    // ? Autoload helps us to automatically require once each instance of classes

    function auto_loader($class_name) {
        if(is_file('lib/' . $class_name . '.php')){
            require_once('lib/' . $class_name . '.php');
            //echo "File '{$class_name}' loaded (init.php) <br>";
        } else {
            die('lib/' . $class_name . '.php does not exists.');
        }
    }

    // ? Alternative of __autoload, since it is deprecated.
    spl_autoload_register('auto_loader');

?>
