<?php

    require_once("../include/connection.php");

    if(isset($_POST['submit']))
    {
        if(empty($_POST['product']) || empty($_POST['stock']) || empty($_POST['price']))
        {
            echo ' Please Fill in the Blank Fields';
        }
        else
        {
            $product = $_POST['product'];
            $stock = $_POST['stock'];
            $price = $_POST['price'];

            $query = " INSERT INTO Products (name, stock, price) VALUES ('$product','$stock', '$price')";
            $result = mysqli_query($con,$query);

            if($result)
            {
                header("location: ../dashboard/products.php");
            }
            else
            {
                echo ' There is an error in your QUERY statement. Please check '.mysqli_error($con);
            }
        }
    }
    else
    {
        header("location: ./add.php");
    }


?>