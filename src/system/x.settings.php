<?php

namespace ConMan;

/**
 * All user settings reside in this class. Each area of settings has its own function.
 */
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
