<?php namespace FormulaFantasy\Database;

//require_once __DIR__ . '/connectPdo.php';

interface IDatabase {

    /**
     * @param $sql
     * @param $fetch_style
     * @param $params
     * @throws \Exception
     * @return mixed
     */
    public function query($sql, $params = array());

    public function fetchAll($sql, $params = array());

}
