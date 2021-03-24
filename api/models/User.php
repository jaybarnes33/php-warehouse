<?php
class User
{
  private $conn;
  private $table = "users";

  //    Properties
  public $id;
  public $fname;
  public $lname;
  public $role;
  public $username;
  public $password;

  // Methods
  public function __construct($db)
  {
    $this->conn = $db;
  }

  public function read()
  {
    $query = "SELECT * from" . $this->table;

    // Prepare statement
    $stmt = $this->conn->prepare($query);
    $stmt->execute();

    return $stmt;
  }
}
