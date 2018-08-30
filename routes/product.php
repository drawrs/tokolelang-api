<?php
require_once "./controllers/product.php";

$product = new Product();

Flight::route('GET /api/products', [$product, 'getProducts']);
Flight::route('POST /api/products', [$product, 'addProduct']);
Flight::route('GET /api/product_category', [$product, 'getCategory']);