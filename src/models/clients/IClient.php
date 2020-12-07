<?php namespace FormulaFantasy\Client;


interface IClient
{
    public function getId();

    public function getDetails();
    public function update($data);
}