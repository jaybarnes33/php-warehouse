<?php

require_once('../include/connection.php');

if(isset($_GET['Del']))
         {
             $orderId = $_GET['Del'];
             $query = " DELETE FROM orders WHERE order_id = '".$orderId."'";
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
             header("location: ../dashboard/orders.php");
         }


?>