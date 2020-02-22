<?php

use App\engine\Autoload;

include dirname(__DIR__) . "/engine/Autoload.php";
spl_autoload_register([new Autoload(), 'loadClass']);

$product = new \App\models\Product(
    1,
    123,
    "T-Shirt",
    500,
    "xxl",
    "red",
    4.5,
    "some trand",
    "link",
    "category",
    "brand",
    "designer",
    "collection",
    "cotton",
    "some big description for this thing");
var_dump($product);