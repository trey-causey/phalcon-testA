<?php namespace Causey\Stats;

require_once __DIR__ . '/../../TestHelper.php';

use Causey\Stats\PostRaceDriverStats;
use FormulaFantasy\Database\DatabasePlain;
use PHPUnit\Framework\TestCase;

class PostRaceDriverStatsTest extends TestCase
{
    //arrange
    //assert
    //act
    public function test__construct()
    {
        $db = new DatabasePlain();
        $this->assertInstanceOf(PostRaceDriverStats::class, new PostRaceDriverStats($db));
    }

    /**
     * @test
     */
    public function testCreate()
    {
        $raceId = 1031;
        $db = new DatabasePlain();
        $prdsObj = PostRaceDriverStats::create($db, $raceId);
        //PostRaceDriverStats($db)::create($db, $raceId);
        //var_dump($prdsObj);
    }

    public function test_createStatByConstructor()
    {}

    public function InfoProvider()
    {
        return [
            [1031,[1, 1031, 815, 211, 3, -2, 2, 0]],
            []
        ];
    }
}
