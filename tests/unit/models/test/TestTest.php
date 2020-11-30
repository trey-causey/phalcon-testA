<?php namespace FormulaFantasy\Tests\Unit;

require_once __DIR__ . '/../../../../common/setup/configurationTests.php';
require_once MODEL_DIR . '/test/Test.php';

use FormulaFantasy\Database\DatabasePlain;
use FormulaFantasy\Test\Test;
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

    public function test__construct()
    {
        $this->assertInstanceOf(Test::class, new Test(new DatabasePlain()));
    }
}
