<?php
include_once "Good.php";

class WeightGoods extends Good{
    private $weight;
    private $purchaseValue;

    public function getPurchaseValue()
    {
        return $this->purchaseValue;
    }

    public function getWeight()
    {
        return $this->weight;
    }
    function __construct($title, $purchaseValue, $weight){
        parent::__construct($title);
        $this->weight = $weight;
        $this->purchaseValue = $purchaseValue;
    }

    public function costCalculation()  // расчет розничной цены, в зависимости от фасовки товара
    {
        switch ($this->weight) {
            case 3:
                return (int)$retailPrice = self::getPurchaseValue() * 1.5; // коэфф.
                break;
            case 10:
                return (int)$retailPrice = self::getPurchaseValue() * 1.4;
                break;
            case 50:
                return (int)$retailPrice = self::getPurchaseValue() * 1.3;
                break;
        }
    }

    public function profit()
    {
        return $profit = self::costCalculation() - self::getPurchaseValue();
    }

}