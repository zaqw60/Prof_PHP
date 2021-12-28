<?php
include_once "Service.php";
include_once "Item.php";
include_once "WeightGoods.php";

class Order
{
    private $purchases = [];
    private $total = 0;

    function __construct()
    {
        $this->createOrder();
        $this->showInfo();
    }

    public function createOrder()
    {

        $s = new Service("Доставка");
        $it1 = new Item("Дрель", "1200Вт");
        $it2 = new Item("Шуруповерт", "12V");
        $it3 = new Item("Шуруповерт", "14,4V");
        $it4 = new Item("Перфоратор", "2000Вт");
        $wg1 = new WeightGoods("Цемент", 150, 3);
        $wg2 = new WeightGoods("Цемент", 250, 10);
        $wg3 = new WeightGoods("Цемент", 450, 50);
        $goods = [$s, $it1, $it2, $it3, $it4, $wg1, $wg2, $wg3];
        for ($i = 0; $i <= rand(0, 10); $i++) {
            $this->purchases[] = $goods[rand(0, count($goods) - 1)];
        }
    }

    public function showInfo()
    {
        foreach ($this->purchases as $purchase) {
            $this->total += $purchase->profit();
        }
        echo "Доход от рандомной продажи товаров составил $this->total руб.";
    }
}
$order = new Order();