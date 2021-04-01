<?php 

    require_once("../include/connection.php");

    if(isset($_POST['update']))
    {
        $id = $_GET['ID'];
        $name = $_POST['name'];
        $product = $_POST['product'];
        $qty = $_POST['quantity'];

        $query = " UPDATE orders SET customer_name = '".$name."', product_name = '".$product."', qty_ordered='".$qty."' where order_id='".$id."'";
        $result = mysqli_query($con,$query);

        if($result)
        {
            header("location: ../dashboard/orders.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location: ./edit.php");
    }


?>