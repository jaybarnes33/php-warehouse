<?php 

    require_once("../include/connection.php");
    $productId = $_GET['GetID'];
    $query = " SELECT * FROM Products WHERE ID ='".$productId."'";
    $result = mysqli_query($con,$query);

    while($row=mysqli_fetch_assoc($result))
    {   
        $name = $row['name'];
        $stock = $row['stock'];
        $price = $row['price'];
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
    <title>Update Product Details </title>
</head>

<body class="bg-light">

    <!-- Navigation Bar -->
    <?php include("../components/Sidebar.php")?>

    <!-- Creating Container to hold the content -->
<div class="content">
  <?php include("../components/Header.php")?>
    
    <div class="formWrapper">

        <form action="./update.php?ID=<?php echo $productId ?>" method="post" class="formContent">
            <p class="formHeading">Update Product Details</p>
            <div class="inputs">
                <div class="inputWrapper">
                    <input type="text" class="form-control mb-2" placeholder=" Product Name " name="name" value="<?php echo $name ?>" required> 
                </div>
                <div class="inputWrapper">
                    <input type="text" class="form-control mb-2" placeholder=" Stock " name="stock" value="<?php echo $stock ?>" required>
                </div>
                <div class="inputWrapper">
                    <input type="text" class="form-control mb-2" placeholder=" Price " name="price" value="<?php echo $price ?>" required>
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