<?php
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
    $query = "SELECT * FROM products";

    // Prepare statement
    $stmt = $this->conn->prepare($query);
    $stmt->execute();

    return $stmt;
  }

  public function read_single()
  {
    $query =
      "SELECT * FROM " .
      $this->table .
      ' product 
    WHERE product.id = ? 
    LIMIT 0,1';

    // Prepare statement
    $stmt = $this->conn->prepare($query);

    //Bind ID as params
    $stmt->bindParam(1, $this->id);

    $stmt->execute();

    $row = $stmt(PDO::FETCH_ASSOC);

    //   Set properties
    $this->id = $row["id"];
    $this->name = $row["name"];
    $this->costPrice = $row["costPrice"];
    $this->sellingPrice = $row["sellingPrice"];
    $this->costPrice = $row["costPrice"];
    $this->countInStock = $row["countInStock"];
  }
}
