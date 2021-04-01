<?php

    require_once("include/connection.php");


    if(isset($_POST['submit']))
    {

        $username=$_POST['username'];
        $password=$_POST['password'];

        $hashed_password = hash(md5, $password);

        $query = "SELECT * FROM users where username = '$username' and password ='$hashed_password'; ";
        $result = mysqli_query($con,$query);
        if($result)
        {
            header("location: ./dashboard/index.php");
        }
        else
        {
            echo 'Invalid Username / Password!';

        }
    }
    else
    {
        echo ' Please check your codes! ';
    }


?>