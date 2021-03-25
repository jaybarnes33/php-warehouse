<?php
// Headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

include_once "../config/Database.php";
include_once "../models/User.php";

// Instantiate DB & connect
$database = new Database();
$db = $database->connect();

// Instantiate user
$user = new User($db);

// GET param
$user->id = isset($_GET["id"]) ? $_GET["id"] : die();
// Fetch user

$user->read_single();

//Create user
$user_arr = [
  "id" => $user->id,
  "fname" => $user->fname,
  "lname" => $user->lname,
  "username" => $user->username,
  "role" => $user->role,
  "created_at" => $user->created_at,
];

// convert to json
print_r(json_encode($user_arr));
