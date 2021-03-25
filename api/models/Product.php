<?php

include_once "../utils/sanitize.php";

class Product
{
  private $conn;
  private $table = "products";

  //    Properties
  public $id;
  public $name;
  public $costPrice;
  public $countInStock;
  public $createdAt;
  public $sellingPrice;

  // Methods
  public function __construct($db)
  {
    $this->conn = $db;
  }

  public function read()
  {
    $query =
      "SELECT * FROM " .
      $this->table .
      ' product 
    ORDER BY product.id DESC ';

    // Prepare statement
    $stmt = $this->conn->prepare($query);
    $stmt->execute();

    return $stmt;
  }

  // Read Single Product
  public function read_single()
  {
    $query = "SELECT * FROM $this->table product WHERE product.id = ? LIMIT 0,1";
    // Prepare statement
    $stmt = $this->conn->prepare($query);

    //Bind ID as params
    $stmt->bindParam(1, $this->id);

    $stmt->execute();

    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    //   Set properties
    $this->id = $row["id"];
    $this->name = $row["name"];
    $this->costPrice = $row["costPrice"];
    $this->sellingPrice = $row["sellingPrice"];
    $this->costPrice = $row["costPrice"];
    $this->countInStock = $row["countInStock"];
  }

  //  Create Product
  public function create()
  {
    $query = "INSERT INTO $this->table ( name,costPrice, sellingPrice, countInStock) VALUES (:name, :costPrice, :sellingPrice, :countInStock)";

    // Prepare statement

    $stmt = $this->conn->prepare($query);

    // clean data
    $this->name = sanitize_input($this->name);
    $this->costPrice = sanitize_input($this->costPrice);
    $this->sellingPrice = sanitize_input($this->sellingPrice);
    $this->countInStock = sanitize_input($this->countInStock);

    // Bind data
    $stmt->bindParam(":name", $this->name);
    $stmt->bindParam(":costPrice", $this->costPrice);
    $stmt->bindParam(":sellingPrice", $this->sellingPrice);
    $stmt->bindParam(":countInStock", $this->countInStock);
    // execute query
    if ($stmt->execute()) {
      return true;
      echo "Product created";
    } else {
      printf("Error: %s.\n", $stmt->error);
    }
  }
}
