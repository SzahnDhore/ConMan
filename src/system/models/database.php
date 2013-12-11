<?php

namespace \ConMan\system\models\database;

/**
 * Handles the database connection and basic CRUD operations.
 */

class Database
{

    function __construct()
    {
        require_once '/../settings.php';
        //	$this->settings = new settings;
    }

    public function connect()
    {
        try {
            $con = new PDO('mysql:host=' . Settings::database('host') . ';dbname=' . Settings::database('dbname'), Settings::database('username'), Settings::database('password'));
            $out = $con;
        } catch(PDOException $error) {
            $out = $error -> getMessage();
        }
        return $out;
    }

    public function create($table, $data, $returnquery = false)
    {
        $con = $this -> connect();
        $sql = 'INSERT INTO `' . $table . '`';
        $sql .= ' (' . implode(', ', array_keys($data)) . ')';
        $sql .= ' VALUES (:' . implode(', :', array_keys($data)) . ')';

        $stmt = $con -> prepare($sql);
        foreach ($data as $key => $value) {
            $stmt -> bindParam(':' . $key, $$key);
            $$key = $value;
        }

        return ($returnquery ? $sql : $stmt -> execute());
        $con = null;
    }

    public function read($table = '', $where = '', $orderby = '', $search = '', $cols = '*', $returnquery = false)
    {
        $con = $this -> connect();
        $sql = 'SELECT ' . $cols . ' FROM `' . $table . '`';
        $sql .= (!empty($where) ? ' WHERE ' . $where : '');
        $sql .= (!empty($order) ? ' ORDER BY ' . $orderby : '');

        return ($returnquery ? $sql : $con -> query($sql));
        $con = null;
    }

}
