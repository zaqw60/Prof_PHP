<?php
include_once "Good.php";

class Item extends Good{
    private $mod;
    private $purchaseValue;

    public function getPurchaseValue()
    {
        return $this->purchaseValue = Service::CONSTANT * 2;  // закупочная цена из условия задания
    }

    public function getMod()
    {
        return $this->mod;
    }


    function __construct($title, $mod){
        parent::__construct($title);
        $this->mod = $mod;
    }

    public function costCalculation()
    {
        return (int)$retailPrice = self::getPurchaseValue() * 1.3;
    }

    public function profit()
    {
        return $profit = self::costCalculation() - self::getPurchaseValue();
    }
}
