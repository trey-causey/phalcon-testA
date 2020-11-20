<?php namespace unit\controllers;

require_once __DIR__ . '/../../../vendor/autoload.php';

use Phalcon\Mvc\Controller;
use testA\controllers\IndexController;
use PHPUnit\Framework\TestCase;

class IndexControllerTest extends TestCase
{

    public function testImplementation(): void
    {
        //$class = $this->createMock(IndexController::class);

        $this->assertInstanceOf(IndexController::class, new IndexController());
    }

}
