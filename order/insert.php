<?php

    require_once("../include/connection.php");

    if(isset($_POST['submit']))
    {
        if(empty($_POST['cust_name']) || empty($_POST['prod_name']) || empty($_POST['qty_ordered']))
        {
            echo ' Please Fill in the Blank Fields';
        }
        else
        {
            $Customer = $_POST['cust_name'];
            $Product = $_POST['prod_name'];
            $Qty = $_POST['qty_ordered'];

            $query = " INSERT INTO orders (customer_name, product_name, qty_ordered) VALUES ('$Customer','$Product', '$Qty');";
            $result = mysqli_query($con,$query);

            if($result)
            {
                header("location: ../dashboard/orders.php");
            }
            else
            {
                echo ' There is an error in your QUERY statement. Please check '.mysqli_error($con);
            }
        }
    }
    else
    {
        header("location: ../dashboard/index.php");
    }


?>