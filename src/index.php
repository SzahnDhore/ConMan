<?php

namespace ConMan;

function autoload($className)
{
    $filename = "system/models/" . $className . ".php";
    if (is_readable($filename)) {
        require $filename;
    }
}

spl_autoload_register('autoload');

var_dump(new \system\models\database);
//$db = new system\models\database;

$data = array('name' => 'Eventnamnet');

//var_dump($db->create('events',$data));

foreach ($db->read('conman-events') as $row) {
    print_r($row);
}
