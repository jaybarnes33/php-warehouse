<?php

require_once('../include/connection.php');

if(isset($_GET['Del']))
         {
             $UserID = $_GET['Del'];
             $query = " DELETE FROM users WHERE ID = '".$UserID."'";
             $result = mysqli_query($con,$query);
             if($result)
             {
                 header("location: ../dashboard/users.php");
             }
             else
             {
                 echo ' Please Check Your Query ';
             }
        }
         else
         {
             header("location: ../dashboard/users.php");
         }


?>