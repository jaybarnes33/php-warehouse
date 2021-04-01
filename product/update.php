<?php 

    require_once("../include/connection.php");

    if(isset($_POST['update']))
    {
        $id = $_GET['ID'];
        $prodName = $_POST['name'];
        $stock = $_POST['stock'];
        $price = $_POST['price'];

        $query = " UPDATE Products SET name = '".$prodName."', stock = '".$stock."', price='".$price."' where ID='".$id."'";
        $result = mysqli_query($con,$query);

        if($result)
        {
            header("location: ../dashboard/products.php");
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