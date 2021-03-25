<?php
// Headers
$method = $_SERVER["REQUEST_METHOD"];

include_once "../config/Database.php";
include_once "../models/Product.php";

if ($method == "GET") {
  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();

  // Instantiate blog post object
  $product = new Product($db);

  header("Access-Control-Allow-Origin: *");
  header("Content-Type: application/json");

  // Blog post query
  $result = $product->read();
  // Get row count
  $num = $result->rowCount();

  // Check if any products
  if ($num > 0) {
    // Products array
    $products_arr["data"] = [];

    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
      extract($row);

      $item = [
        "id" => $id,
        "name" => $name,
        "costPrice" => $costPrice,
        "sellingPrice" => $sellingPrice,
        "countInStock" => $countInStock,
        "createdAt" => $created_at,
      ];

      // Push to "data"
      array_push($products_arr["data"], $item);
    }

    // Turn to JSON & output
    echo json_encode($products_arr);
  } else {
    // No Products
    echo json_encode(["message" => "No Products Found"]);
  }
} elseif ($method == "POST") {
  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();

  // Instantiate blog product object
  $product = new Product($db);

  header("Access-Control-Allow-Origin: *");
  header("Content-Type: application/json");
  header("Access-Control-Allow-Methods: POST");
  header(
    "Access-Control-Allow-Headers: 
    Access-Control-Allow-Headers,
     Content-Type, 
     Access-Control-Allow-Methods, 
    Authorization, X-Requested-With"
  );

  $data = json_decode(file_get_contents("php://input"));

  $product->name = $data->name;
  $product->countInStock = $data->countInStock;
  $product->sellingPrice = $data->sellingPrice;
  $product->costPrice = $data->costPrice;

  if ($product->create()) {
    echo json_encode(["message" => "Product created"]);
  } else {
    http_response_code(400);
    echo json_encode(["message" => "Product not created"]);
  }
}
