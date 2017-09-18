<?php
include_once 'goods.php';
include_once 'digital_product.php';
include_once 'physical_product.php';
include_once 'weight_product.php';

$dp = new DigitalProduct;
$dp->cost(100, 8);
$pp = new PhysicalProduct;
$pp->cost(100, 8);
$wp = new WeightProduct;
$wp->cost(100, 5.4);