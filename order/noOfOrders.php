<?php

require_once('../include/connection.php');

$query="SELECT order_id FROM orders;";
$result = mysqli_query($con,$query);

if(!result){
    echo 'Please check your code!';
}
else{

        while($row=mysqli_fetch_assoc($result))
    {   
        $numOfOrders +=1;

    }
    
}


?>