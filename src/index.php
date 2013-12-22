<?php

namespace ConMan;

// --- Autoloads class files.
require 'system/x.autoloader.php';

// --- Thanks to the autoloader and the file structure, I don't need to include any files for classes I want to use.
$db = new Database;

echo '<pre>';
var_dump($db->read(isset($_GET['table']) ? $_GET['table'] : ''));
echo '</pre>';
