<?php

namespace ConMan;

/**
 * All user settings reside in this class. Each area of settings has its own function.
 */
class Settings
{

    public static function database($setting = '')
    {
        $dbsettings['xampp'] = array(
            'host' => 'localhost',
            'dbname' => 'conman',
            'username' => 'root',
            'password' => '',
            'prefix' => 'conman-',
        );

        $dbsettings['cloud9'] = array(
            'host' => $_SERVER['SERVER_ADDR'],
            'dbname' => 'c9',
            'username' => 'szahndhore',
            'password' => '',
            'prefix' => 'conman-',
        );

        $dbsettings = $dbsettings['cloud9'];

        return (array_key_exists($setting, $dbsettings) ? $dbsettings[$setting] : $dbsettings);
    }

}
