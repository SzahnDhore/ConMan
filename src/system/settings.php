<?php

namespace \ConMan\system\Settings;

class Settings
{

    public static function database($setting = '')
    {
        $dbsettings = array(
            'host' => 'localhost',
            'dbname' => 'conman',
            'username' => 'root',
            'password' => '',
            'prefix' => 'conman-',
        );

        return (array_key_exists($setting, $dbsettings) ? $dbsettings[$setting] : $dbsettings);
    }

}