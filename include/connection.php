<?php

$con = mysqli_connect("localhost", "root", "mysql", "warehouse_management_system");

if(!$con){
    die(" Connection Error ").mysqli_error();
}

?>