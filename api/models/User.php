<?php
include_once "../utils/sanitize.php";
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
  public $created_at;
  // Methods
  public function __construct($db)
  {
    $this->conn = $db;
  }

  // GET users
  public function read()
  {
    $query = "SELECT * from $this->table";

    // Prepare statement
    $stmt = $this->conn->prepare($query);
    $stmt->execute();

    return $stmt;
  }

  // Read Single Product
  public function read_single()
  {
    $query = "SELECT * FROM $this->table user WHERE user.id = ? LIMIT 0,1";
    // Prepare statement
    $stmt = $this->conn->prepare($query);

    //Bind ID as params
    $stmt->bindParam(1, $this->id);

    $stmt->execute();

    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    //   Set properties
    $this->id = $row["id"];
    $this->fname = $row["fname"];
    $this->lname = $row["lname"];
    $this->role = $row["role"];
    $this->username = $row["username"];
    $this->created_at = $row["created_at"];
  }

  //  Create Product
  public function create()
  {
    $query = "INSERT INTO $this->table ( fname,lname, username, role, password) VALUES (:fname, :lname, :username, :role, :password)";

    // Prepare statement

    $stmt = $this->conn->prepare($query);

    // clean data
    $this->fname = sanitize_input($this->fname);
    $this->lname = sanitize_input($this->lname);
    $this->username = sanitize_input($this->username);
    $this->role = sanitize_input($this->role);
    $this->password = sanitize_input($this->password);

    // Bind data
    $stmt->bindParam(":fname", $this->fname);
    $stmt->bindParam(":lname", $this->lname);
    $stmt->bindParam(":username", $this->username);
    $stmt->bindParam(":role", $this->role);
    $stmt->bindParam(":password", $this->password);

    // execute query
    if ($stmt->execute()) {
      return true;
      echo "User created";
    } else {
      printf("Error: %s.\n", $stmt->error);
    }
  }
}
