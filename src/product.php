<?php
$products = [
  [
    'id' => 1,
    'name' => 'Alabaster Table',
    'price' => 12.99,
    'created' => '2019-01-04',
    'sales_count' => 32,
    'views_count' => 730,
  ],
  [
    'id' => 2,
    'name' => 'Zebra Table',
    'price' => 44.49,
    'created' => '2012-01-04',
    'sales_count' => 301,
    'views_count' => 3279,
  ],
  [
    'id' => 3,
    'name' => 'Coffee Table',
    'price' => 10.00,
    'created' => '2014-05-28',
    'sales_count' => 1048,
    'views_count' => 20123,
  ]
];
class Product
{
  public $id, $name, $price, $created, $sales_count, $views_count;

  public function __construct($product)
  {
    $this->id = $product["id"];
    $this->name = $product["name"];
    $this->price = $product["price"];
    $this->created = $product["created"];
    $this->sales_count = $product["sales_count"];
    $this->views_count = $product["views_count"];
  }

  public static function arrayToObject($array)
  {
    return new self($array);
  }

  public static function createProductList($products)
  {
    return array_map([self::class, 'arrayToObject'], $products);
  }
}
