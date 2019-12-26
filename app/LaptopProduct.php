<?php

class LaptopProduct extends Product
{
  private $cpu;
  private $ram;
  private $numberOfCores;

  function __construct($title, $full_description, $description, $price, $image, $cpu, $ram, $numberOfCores)
  {
    parent::__construct($title, $full_description, $description, $price, $image);
    $this->cpu = $cpu;
    $this->ram = $ram;
    $this->numberOfCores = $numberOfCores;
  }

  public function addProduct($pdo, $title, $full_description, $description, $price, $image, $cpu, $ram, $numberOfCores)
  {
    $sql = "INSERT INTO laptop (title, full_description, description, price, image, cpu, ram, numberOfCores)
    VALUES (?,?,?,?,?,?,?,?)";
    $query = $pdo->prepare($sql);
    $query->execute([$this->title, $this->full_description, $this->description,
    $this->price, $this->image, $this->cpu, $this->ram, $this->numberOfCores]);
  }
}
