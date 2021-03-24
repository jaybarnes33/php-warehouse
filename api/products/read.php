<?php
// Headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

include_once "../config/Database.php";
include_once "../models/Product.php";

// Instantiate DB & connect
$database = new Database();
$db = $database->connect();

// Instantiate blog post object
$product = new Product($db);

// Blog post query
$result = $product->read();
// Get row count
$num = $result->rowCount();

// Check if any posts
if ($num > 0) {
  // Post array
  $products_arr = [];
  // $posts_arr['data'] = array();

  while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    extract($row);

    $product = [
      "id" => $id,
      "name" => $name,
      "costPrice" => $costPrice,
      "sellingPrice" => $sellingPrice,
      "countInStock" => $countInStock,
      "createdAt" => $created_at,
    ];

    // Push to "data"
    array_push($products_arr, $product);
    // array_push($products_arr['data'], $post_item);
  }

  // Turn to JSON & output
  echo json_encode($products_arr);
} else {
  // No Posts
  echo json_encode(["message" => "No Posts Found"]);
}
