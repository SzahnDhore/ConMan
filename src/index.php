<?php

namespace ConMan;
// --- Autoloads class files.
require 'system/x.autoloader.php';

// --- Thanks to the autoloader, I don't need to include the file for any class I want to use.
$db = new Database;

echo '<pre>';
var_dump($db->connect());
echo '</pre>';
