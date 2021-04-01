<?php 

    require_once("../include/connection.php");

    if(isset($_POST['update']))
    {
        $id = $_GET['ID'];
        $fullname = $_POST['name'];
        $username = $_POST['username'];
        $role = $_POST['role'];
        $Password = hash(md5, $_POST['password']);

        $query = " UPDATE users SET name = '".$fullname."', username = '".$username."', role='".$role."', password='".$Password."' where ID='".$id."'";
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
        header("location: ./edit.php");
    }


?>