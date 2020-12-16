<?php namespace FormulaFantasy\Client;

use FormulaFantasy\Database\DatabasePlain;
use FormulaFantasy\Database\IDatabase;

class TeamManager
{
    protected $id;

    protected $db;

    public function getById($id)
    {
        $param = [$id];
        $sql = "SELECT * from teamOwners where teamOwnerId = ?";
        $this->db = new DatabasePlain();
        return $this->db->fetchAll($sql, $id);
    }
}