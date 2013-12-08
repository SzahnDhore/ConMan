<?php

// ================================================================
// settings.php
// ----------------------------------------------------------------
// All user definable variables are placed in here.
// ================================================================

class settings {

	function __construct() {

	}



	public static function database($setting='') {

		$dbsettings = array(
			'host'		=> 'localhost',
			'dbname'	=> 'conman',
			'username'	=> 'root',
			'password'	=> '',
			'prefix'	=> 'conman-',
		);

		return (array_key_exists($setting, $dbsettings) ? $dbsettings[$setting] : $dbsettings);

	}

}


?>