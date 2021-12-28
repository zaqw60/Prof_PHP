<?php
include_once "Sale.php";

class Paint{
    protected $title;
    protected $manufacture;
    protected $color;
    public $price;


    public function getTitle()
    {
        return $this->title;
    }

    public function getManufacture()
    {
        return $this->manufacture;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getColor()
    {
        return $this->color;
    }


    function __construct($title, $manufacture, $color, $price)
    {
        $this->title = $title;
        $this->price = $price;
        $this->color = $color;
        $this->manufacture = $manufacture;
    }

    function getInfo()
    {
        echo "{$this->title} {$this->manufacture} {$this->color} стоит {$this->price}р.<hr>";
    }
}


$paint1 = new Paint("эмаль", "текс", "белая", 250);
$paint2 = new Paint("эмаль", "новоколор", "синяя", 234);
$paint3 = new Paint("эмаль", "hammer", "белая", 220);
$paint4 = new Paint("эмаль", "радугамалер", "белая", 264);
$paint5 = new Paint("эмаль", "текс", "желтая", 239);

$paints = [$paint1, $paint2, $paint3, $paint4, $paint5];
foreach ($paints as $paint){
    if($paint->getManufacture() == 'радугамалер'){
       $obj = new Sale;
       $obj->discount($paint);
}
//$paint = new Paint();
$paint->getInfo();
}

