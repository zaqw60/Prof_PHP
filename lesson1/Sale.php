<?php
class Sale{
    function discount($paint){
      $paint->getPrice() /= 2;
    }
}