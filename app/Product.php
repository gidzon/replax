<?php

abstract class  Product
{
  protected $title;
  protected $full_description;
  protected $description;
  protected $price;
  protected $image;

  public function __construct($title, $full_description, $description, $price, $image)
  {
    $this->title = $title;
    $this->full_description = $full_description;
    $this->description = $description;
    $this->price = $price;
    $this->image = $image;
  }

  public function ShowGoods($pdo, $table)
  {
    $sql = "SELECT * FROM $table";
    $result = $pdo->query($sql);
    return $result;
  }

  public function ShowProduct($pdo, $id, $table)
  {
    $sql = "SELECT * FROM $table WHERE id = ?";
    $query = $pdo->prepare($sql);
    $query->execute([$id]);
    $result = $query->fetch();
    return $result;
  }





}
