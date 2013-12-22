<?php

namespace ConMan;

/**
 * This class takes care of checking for tables, posts and other kinds of data and information.
 */
class CheckFor
{

    /**
     * Checks for the specified table and returns true if found, false if not found. Optional argument allows for
     * automatic creation of tables that are not found.
     */
    public function table($table, $create = false)
    {
        if ($table == '') {
            $out = 'Error: No table selected.';
        } else {
            $con = Database::connect();
            $table = Settings::database('prefix') . $table;

            $out = gettype($con->exec('SELECT count(*) FROM `' . $table . '`')) == 'integer';
            $con = null;
        }
        return $out;
    }

}
