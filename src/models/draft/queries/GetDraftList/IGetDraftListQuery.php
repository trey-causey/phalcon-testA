<?php namespace FormulaFantasy\Draft;

interface IGetDraftListQuery {

    function Execute();
    function GetDraftListByRound($roundNumber);
}
