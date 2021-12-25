<?php
include_once "Paint.php";
class QuickDryingPaint extends Paint{
    private $property;
    private $timeDrying;


    function __construct($title, $manufacture, $color, $property, $price, $timeDrying)
    {
        parent:: __construct($title, $manufacture, $color, $price);
        $this->timeDrying = $timeDrying;
        $this->property = $property;

    }

    public function getInfo(){
        echo parent::getInfo()."{$this->title} {$this->manufacture} {$this->color} {$this->property} стоимостью {$this->price} высыхает за {$this->timeDrying} ч.";
    }
}

$quickDryingPaint = new QuickDryingPaint("Эмаль", "текс", "белая", "быстросохнущая",350, "0,5" );
$quickDryingPaint->getInfo();