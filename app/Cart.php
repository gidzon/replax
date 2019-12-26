<?php

class Cart
{

  private $count;
  private $price;
  function __construct($count, $price)
  {

    $this->count = $count;
    $this->price = $price;
  }

  public function getAmountProducts()
  {
    // метод должен вернуть сумму продуктов
  }
}
