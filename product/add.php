<?php 

    require_once("../include/connection.php");

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
    <title>Add Product</title>
</head>

<body>

    <!-- Navigation Bar -->
    <?php include("../components/Sidebar.php")?>

    <!-- Creating Container to hold the content -->
<div class="content">
  <?php include("../components/Header.php")?>
    
    <div class="formWrapper">

        <form action="./insert.php" method="post" class="formContent">
            <p class="formHeading">Add Product</p>
            <div class="inputs">
                <div class="inputWrapper">
                    <input type="text" class="form-control mb-2" placeholder=" Product Name " name="product" required> 
                </div>
                <div class="inputWrapper">
                    <input type="number" class="form-control mb-2" placeholder=" Stock " name="stock" required>
                </div>
                <div class="inputWrapper">
                    <input type="number" step=".01" class="form-control mb-2" placeholder=" Price " name="price" required>
                </div>
                
                <div class="buttonWrapper">
                    <button class="button" name="submit">+</button>
                </div>
            </div>
        </form>
    </div>                
</div>

</body>


</html>