<?php

class PhoneProduct extends Product
{
  private $camera;
  private $memory;

  function __construct($title, $full_description, $description, $price, $image, $camera, $memory)
  {
    parent::__construct($title, $full_description, $description, $price, $image);
    $this->camera = $camera;
    $this->memory = $memory;
  }

  public function addProduct($pdo, $title, $full_description, $description, $price, $image, $camera, $memory)
  {
    $sql = "INSERT INTO laptop (title, full_description, description, price, image, camera, memory)
    VALUES (?,?,?,?,?,?,?)";
    $query = $pdo->prepare($sql);
    $query->execute([$this->title, $this->full_description, $this->description,
    $this->price, $this->image, $this->camera, $this->memory]);
  }
}
