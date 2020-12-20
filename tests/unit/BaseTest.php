<?php namespace FormulaFantasy\UnitTests;

require_once __DIR__ . '/../../tests/unit/TestHelper.php';

use FormulaFantasy\Database\DatabasePlain;
use Phalcon\Di;
use FormulaFantasy\Database\IDatabase;
use PHPUnit\Exception;
use PHPUnit\Framework\TestCase;
use Phalcon\Test\UnitTestCase as PhalconTestCase;

abstract class BaseTest extends PhalconTestCase
{
    protected $di;
    /** @var IDatabase */
    protected  $db;

    /**
     * @param  \Phalcon\DiInterface $di
     * @param  \Phalcon\Config      $config
     */
    protected function setUp(\Phalcon\DiInterface $di = NULL, \Phalcon\Config $config = NULL)
    {
        $this->di->getDI();
        parent::setUp($di);
        $this->setDI($di);
        $this->db = new DatabasePlain();
    }
}


