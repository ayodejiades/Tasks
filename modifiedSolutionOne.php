<?php 
require_once("c:/xampp/htdocs/Tasks/src/product.php"); 
require_once("c:/xampp/htdocs/Tasks/src/catalog.php");
$products = Product::createProductList($products);
$catalog = new Catalog($products);
$productsSortedByPrice = $catalog->getProducts('productPriceSorter');
$productsSortedBySalesPerView = $catalog->getProducts('productSalesPerViewSorter');
$productsSortedByView = $catalog->getProducts("productViewSorter");
print_r($productsSortedByPrice);
print_r($productsSortedBySalesPerView);
print_r($productsSortedByView);
?>;