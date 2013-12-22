<?php

namespace ConMan;

use PDO;

/**
 * Handles the database connection and basic CRUD operations.
 */
class Database
{

    public static function connect()
    {
        try {
            $con = new PDO('mysql:host=' . Settings::database('host') . ';dbname=' . Settings::database('dbname'), Settings::database('username'), Settings::database('password'));
            $out = $con;
        } catch(PDOException $error) {
            $out = $error->getMessage();
        }
        return $out;
    }

    public function create($table, $data, $returnquery = false)
    {
        if ($table == '') {
            $out = 'Error: No table selected.';
        } else {
            $con = $this->connect();
            $table = Settings::database('prefix') . $table;
            $sql = 'INSERT INTO `' . $table . '` (' . implode(', ', array_keys($data)) . ') VALUES (:' . implode(', :', array_keys($data)) . ')';
            $stmt = $con->prepare($sql);

            foreach ($data as $key => $value) {
                $stmt->bindParam(':' . $key, $$key);
                $$key = $value;
            }

            $out = ($returnquery ? $sql : $stmt->execute());
            $con = null;
        }
        return $out;
    }

    public function read($table, $where = '', $orderby = '', $search = '', $cols = '*', $returnquery = false)
    {
        if ($table == '') {
            $out = 'Error: No table selected.';
        } else {
            $con = $this->connect();
            $table = Settings::database('prefix') . $table;
            $sql = 'SELECT ' . $cols . ' FROM `' . $table . '`' . (!empty($where) ? ' WHERE ' . $where : '') . (!empty($order) ? ' ORDER BY ' . $orderby : '');
            $stmt = $con->prepare($sql);
            $stmt->execute();

            $out = ($returnquery ? $sql : $stmt->fetchAll(PDO::FETCH_ASSOC));
            $con = null;
        }
        return $out;
    }

}
