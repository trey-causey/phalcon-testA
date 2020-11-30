<?php namespace FormulaFantasy\Tests\Unit;

use FormulaFantasy\Database\DatabasePlain;
use FormulaFantasy\Results\QualifyingResultsConstructor;
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/TestHelper.php';
require_once MODEL_DIR . '/database/DatabasePlain.php';

class SandboxTest extends TestCase
{
    /**
     * @test
     * @dataProvider
     */
    public function TestResultsClass()
    {
        require_once MODEL_DIR . '/results/qualifying/QualifyingResultsConstructor.php';
        $QRCObj = new QualifyingResultsConstructor(new DatabasePlain(), 131, 1031);
        $this->assertIsArray($QRCObj->getData());
    }
}


