<?php

    require_once("../include/connection.php");

    if(isset($_POST['submit']))
    {
        if(empty($_POST['full_name']) || empty($_POST['user_name']) || empty($_POST['role']) || empty($_POST['password']))
        {
            echo ' Please Fill in the Blank Fields';
        }
        else
        {
            $fullName = $_POST['full_name'];
            $userName = $_POST['user_name'];
            $role = $_POST['role'];
            $password = hash(md5, $_POST['password']);

            $query = " INSERT INTO users (name, username, role, password) VALUES ('$fullName','$userName', '$role', '$password')";
            $result = mysqli_query($con,$query);

            if($result)
            {
                header("location: ../dashboard/users.php");
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