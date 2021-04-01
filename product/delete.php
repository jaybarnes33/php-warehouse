<?php

require_once('../include/connection.php');

if(isset($_GET['Del']))
         {
             $productId = $_GET['Del'];
             $query = " DELETE FROM Products WHERE ID = '".$productId."'";
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
             header("location: ../dashboard/products.php");
         }


?>