<?php namespace FormulaFantasy\Qualifying;

interface IGetQualifyingListQuery
{
    function GetData();
    function GetQualifyingListByRaceID($raceId);
}
