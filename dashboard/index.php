<?php

    require_once("../user/noOfUsers.php");
    require_once("../order/noOfOrders.php");
    require_once("../product/noOfProducts.php");
    require_once("../include/connection.php");
    $query1 = " SELECT * FROM orders; ";
    $result1 = mysqli_query($con,$query1);
    $query2 = " SELECT * FROM Products; ";
    $result2 = mysqli_query($con,$query2);
    $query = " SELECT * FROM users ";
    $result = mysqli_query($con,$query);
?>

<!DOCTYPE php>
<php lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/utils.css" />
    <link rel="stylesheet" href="../css/main.css" />
    <link rel="stylesheet" href="../css/index.css"/>
    <link rel="stylesheet" href="../assets/fontawesome-free/css/all.css" />
  </head>

  <body>
    <!-- Side -->
    <?php include("../components/Sidebar.php")

    ?>
    <!-- Content -->
    <div class="content">
    <?php
      include("../components/Header.php");
    ?>
     
      <section class="statistics">
        <div class="statItem">
          <span class="number mr-2"><?php echo $numOfProducts ?></span>Products in stock
        </div>
        <div class="statItem"><span class="number mr-2"><?php echo $numOfUsers ?></span>Users</div>
        <div class="statItem">
          <span class="number mr-2"><?php echo $numOfOrders ?></span>Orders
        </div>
      </section>

      <section class="tables">

        <!--Product Table -->
        <div class="tableWrapper products">
          <?php include("../tables/product_table.php") ?>
        </div>
          
        <!--Users Table -->
        <div class="tableWrapper users">
         <?php include("../tables/user_table.php") ?>
        </div>
        

         <!-- Orders Table -->
      <div class="tableWrapper orders">
        <?php include("../tables/order_table.php");?>
      </div>
        
      </section>
    </div>

    <!-- End Content -->
  </body>
</php>
