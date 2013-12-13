<?php

namespace ConMan;

// --- Registers a function for autoloading undefined classes.
spl_autoload_register('ConMan\autoloader');

// --- The autoloading function.
function autoloader($class)
{
    // --- Removes the namespace from the class.
    $class = strtolower(str_replace(__NAMESPACE__ . '\\', '', $class));

    // --- Directories where classes reside. Relative to root.
    $dirs = array('system\\', );

    // --- Prefixes for class files.
    $prefix = array(
        'presentation',
        'abstraction',
        'control',
        'x',
    );

    // --- Class file suffix.
    $suffix = '.php';

    // --- Checks for a file having the same name as the class in each specified directory and includes it.
    foreach ($dirs as $dir) {
        foreach ($prefix as $type) {
            $file = $dir . $type . '.' . $class . '.php';
            if (is_readable($file)) {
                require $file;
            }
        }
    }

}
