<?php

class DisplayProduct extends Product
{
  private $diagonal;
  function __construct($title, $full_description, $description, $price, $image, $diagonal)
  {
    parent::__construct($title, $full_description, $description, $price, $image);
    $this->diagonal = $diagonal;
  }

  public function addProduct($pdo, $title, $full_description, $description, $price, $image, $diagonal)
  {
    $sql = "INSERT INTO laptop (title, full_description, description, price, image, diagonal)
    VALUES (?,?,?,?,?,?,?,?)";
    $query = $pdo->prepare($sql);
    $query->execute([$this->title, $this->full_description, $this->description,
    $this->price, $this->image, $this->diagonal]);
  }

}
