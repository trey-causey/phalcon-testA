<?php namespace Models\Qualifying\Queries;

interface IGetQualifyingListQuery
{
    function GetData();
    function GetQualifyingListByRaceID($raceId);
}
