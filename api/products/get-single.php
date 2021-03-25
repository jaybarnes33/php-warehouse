<?php
// Headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

include_once "../config/Database.php";
include_once "../models/Product.php";

// Instantiate DB & connect
$database = new Database();
$db = $database->connect();

// Instantiate blog post
$product = new Product($db);

// GET param
$product->id = isset($_GET["id"]) ? $_GET["id"] : die();
// Fetch Post

$product->read_single();

//Create post
$product_arr = [
  "id" => $product->id,
  "name" => $product->name,
  "sellingPrice" => $product->sellingPrice,
  "costPrice" => $product->costPrice,
  "countInStock" => $product->countInStock,
];

// convert to json
print_r(json_encode($product_arr));
