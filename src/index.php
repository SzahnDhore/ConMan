<?php

require_once 'system/models/database.class.php';
$db = new database;

$data = array('name'=>'Eventnamnet');

//var_dump($db->create('events',$data));

foreach ($db->read('conman-events') as $row) {
	print_r($row);
}

?>