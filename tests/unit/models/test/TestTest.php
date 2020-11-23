<?php namespace unit\models\test;

require_once __DIR__ . '/../../../../vendor/autoload.php';
require_once __DIR__ . '/../../../../src/models/test/Test.php';
use Models\database\DatabasePlain;
use Models\test\Test;
use PHPUnit\Framework\TestCase;

class TestTest extends TestCase
{

    public function testShowWholeTable()
    {
        $tableObj = new Test(new DatabasePlain());
        $this->assertIsArray($tableObj->ShowWholeTable());
    }

    public function testSaveTestItem()
    {
        $testObj = new Test(new DatabasePlain());
        $testObj->SaveTestItem(null, "testTitle4", "https://www.formula1.com/content/fom-website/en/drivers/max-verstappen/_jcr_content/image.img.1920.medium.jpg/1584012927837.jpg");

    }
}
