<?php

require_once __DIR__ . '/../../../TestHelper.php';

include __DIR__ . '/../../../providers/clients/teamManagerProviders.php';

use FormulaFantasy\Client\TeamManager;
use PHPUnit\Framework\TestCase;

class TeamManagerTest extends TestCase
{
    /**
     * @test
     * @dataProvider TeamManagerProvider
     */
    public function TestGetById_WithId_ReturnRecord($data, $expected)
    {
        $to = new TeamManager();
        $ans = $to->getById($data);
        $this->assertEquals($expected, $ans);
    }

    public function TeamManagerProvider()
    {
        return [
            [[1],[array (
                'teamOwnerId' => '1',
                0 => '1',
                'firstName' => 'Nick',
                1 => 'Nick',
                'lastName' => 'Lemaitre',
                2 => 'Lemaitre',
                'dob' => NULL,
                3 => NULL,
                'handleName' => 'nicklemaitre',
                4 => 'nicklemaitre',
            )]]
        ];
    }
}
