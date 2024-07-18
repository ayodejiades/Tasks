<?php
class Catalog
{
  public $products;

  public function __construct($products)
  {
    $this->products = $products;
  }

  public function getProducts($sorter)
  {
    $products = $this->products;
    usort($products, [self::class, $sorter]);
    return $products;
  }

  public static function productPriceSorter($object1, $object2)
  {
    return $object1->price <=> $object2->price;
  }

  public static function productSalesPerViewSorter($object1, $object2)
  {
    $rate1 = $object1->sales_count / $object1->views_count;
    $rate2 = $object2->sales_count / $object2->views_count;
    return $rate1 <=> $rate2;
  }

  public static function productViewSorter($object1, $object2){
    return $object1->view <=> $object2->view;
  }
}
