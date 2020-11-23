<?php namespace Models\database;

require_once __DIR__ . '/IDatabase.php';

abstract class Database implements IDatabase
{
    /**
     * @inheritDoc
     */
    public function query($sql, $fetch_style, $params = array())
    {
        // TODO: Implement query() method.
    }

    public function fetchAll($sql, $params = array())
    {
        // TODO: Implement fetchAll() method.
    }
}