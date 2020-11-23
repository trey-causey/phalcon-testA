<?php namespace Models\database;

use PDO;
use PDOException;

require_once __DIR__ . '/Database.php';
require_once __DIR__ . '/../../../common/setup/config.inc.php';

class DatabasePlain extends Database {
    protected $db;

    public function __construct()
    {
        try {
        $this->db = new PDO(PDO_DSN, MARIADB_USER, MARIADB_PASSWORD);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            printf("We had a problem: %s\n", $e->getMessage());
        }
    }

    /**
     * @param $sql
     * @param $fetch_style
     * @param $params
     * @return mixed
     */
    public function query($sql, $fetch_style, $params = array())
    {
        $stm = $this->db->prepare($sql);
        $stm->setFetchMode($fetch_style);
        $stm->execute($params);
        return $stm;
    }

    public function fetchAll($sql, $params = array())
    {
        $sth = $this->db->prepare($sql);
        $sth->execute();

       $result = $sth->fetchAll();
       return $result;
    }




}