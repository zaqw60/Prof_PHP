<?php
abstract class Good{
    protected $title;
    public function getTitle()
    {
        return $this->title;
    }
    function __construct($title){
        $this->title = $title;
    }
    abstract function costCalculation(); // подсчет финальной стоимости
    abstract function profit();          // подсчет дохода с продажи единицы товара
}












