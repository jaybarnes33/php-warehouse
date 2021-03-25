<?php
// Headers
$method = $_SERVER["REQUEST_METHOD"];

include_once "../config/Database.php";
include_once "../models/User.php";

if ($method == "GET") {
  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();

  // Instantiate blog post object
  $user = new User($db);

  header("Access-Control-Allow-Origin: *");
  header("Content-Type: application/json");

  // Blog post query
  $result = $user->read();
  // Get row count
  $num = $result->rowCount();

  // Check if any posts
  if ($num > 0) {
    // Post array
    $users_arr["data"] = [];
    // $posts_arr['data'] = array();

    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
      extract($row);

      $item = [
        "id" => $id,
        "fname" => $fname,
        "lname" => $lname,
        "role" => $role,
        "username" => $username,
      ];

      // Push to "data"
      array_push($users_arr["data"], $item);
    }

    // Turn to JSON & output
    echo json_encode($users_arr);
  } else {
    // No Posts
    echo json_encode(["message" => "No Users Found"]);
  }
} elseif ($method == "POST") {
  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();

  // Instantiate blog post object
  $user = new User($db);

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

  $user->fname = $data->fname;
  $user->lname = $data->lname;
  $user->role = $data->role;
  $user->username = $data->username;
  $user->password = $data->password;

  if ($user->create()) {
    echo json_encode(["message" => "User created"]);
  } else {
    http_response_code(400);
    echo json_encode(["message" => "User not created"]);
  }
}
