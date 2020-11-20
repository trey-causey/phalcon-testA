<?php namespace unit\models\circuits;

require_once __DIR__  . '/../../../../app/models/circuits/Circuit.php';

use Phalcon\Di;
use Phalcon\Mvc\Model\Manager;
use testA\models\Circuit;
use PHPUnit\Framework\TestCase;

class CircuitTest extends TestCase
{
    public function test__construct()
    {
        $di = new Di();
        $di['modelsManager'] = function () {
            return new Manager();
        };
        $class = new Circuit();
        $class->setDI($di);
        $this->assertInstanceOf(Circuit::class, $class);
    }

    public function test__variousModelsManagerFunctions()
    {
        $di = new Di();
        $di['modelsManager'] = function () {
            return new Manager();
        };
        $class = new Circuit();
        $class->setDI($di);
        $arr = $class->dump();
        var_dump($arr);
        $this->assertIsArray($arr);
    }

    public function test__test()
    {

    }


}
