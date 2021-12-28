<?php
include_once "Good.php";

class Service extends Good{
const CONSTANT = 500;

function showConstant(){
   return self::CONSTANT;
}

    function __construct($title)
    {
        parent::__construct($title);
    }
    public function costCalculation()
    {
        return (int)$retailPrice = self::CONSTANT;
    }

    public function profit()
    {
        return $profit = self::CONSTANT;
    }
}