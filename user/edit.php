<?php 

    require_once("../include/connection.php");
    $UserID = $_GET['GetID'];
    $query = " SELECT * FROM users WHERE ID ='".$UserID."'";
    $result = mysqli_query($con,$query);

    while($row=mysqli_fetch_assoc($result))
    {   
        $id = $row['ID'];
        $name = $row['name'];
        $username = $row['username'];
        $role = $row['role'];

    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/utils.css" />
    <link rel="stylesheet" href="../css/main.css" />
    <link rel="stylesheet" href="../css/index.css" />
    <link rel="stylesheet" href="../assets/fontawesome-free/css/all.css" />
    <title>Update Employee Details </title>
</head>

<body class="bg-light">

    <!-- Navigation Bar -->
    <?php include("../components/Sidebar.php")?>

    <!-- Creating Container to hold the content -->
<div class="content">
  <?php include("../components/Header.php")?>
    
    <div class="formWrapper">

        <form action="update.php?ID=<?php echo $UserID ?>" method="post" class="formContent">
            <p class="formHeading">Update Employee Details</p>
            <div class="inputs">
                <div class="inputWrapper">
                    <input type="text" class="form-control mb-2" placeholder=" Full Name " name="name" value="<?php echo $name ?>" required> 
                </div>
                <div class="inputWrapper">
                    <input type="text" class="form-control mb-2" placeholder=" User Name " name="username" value="<?php echo $username ?>" required>
                </div>
                <div class="inputWrapper">
                    <input type="text" class="form-control mb-2" placeholder=" Role " name="role" value="<?php echo $role ?>" required>
                </div>
                <div class="inputWrapper">
                    <input type="password" class="form-control mb-2" placeholder=" Password " name="password" required>
                </div>
                <div class="buttonWrapper">
                    <button class="button" name="update">Update</button>
                </div>
            </div>
        </form>
    </div>                
</div>

</body>


</html>