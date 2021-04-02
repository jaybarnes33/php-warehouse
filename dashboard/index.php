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
        <h3 class="heading">Products</h3>
          <table class="styled-table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Date Added</th>
                <th>Product Name</th>
                <th>Stock</th>
                <th>Price</th>
              </tr>
            </thead>
            <tbody>
               
              <?php 
                                
                while($row=mysqli_fetch_assoc($result2))
                {
                    $id = $row['ID'];
                    $product = $row['name'];
                    $stock = $row['stock'];
                    $price = $row['price'];
                    $date = $row['date_added'];
                ?>
              <tr>
                  <td><?php echo $id ?></td>
                  <td><?php echo $date ?></td>
                  <td><?php echo $product ?></td>
                  <td><?php echo $stock ?></td>
                  <td><?php echo $price ?></td>
              </tr>
              <?php 
                  }  
              ?>
            </tbody>
          </table>
          </div>
          
        <!--Users Table -->       
        <div class="tableWrapper users">
        <h3 class="heading">Users </h3>
          <table class="styled-table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Username</th>
                <th>Role</th>
                <th>Date</th>
              </tr>
            </thead>
            <tbody>
            
              <?php 
                                      
                while($row=mysqli_fetch_assoc($result))
                {
                  $id = $row['ID'];
                  $name = $row['name'];
                  $username = $row['username'];
                  $role = $row['role'];
                  $date = $row['date_added'];
              ?> 
              <tr>
                  <td><?php echo $id ?></td>
                  <td><?php echo $name ?></td>
                  <td><?php echo $username ?></td>
                  <td><?php echo $role ?></td>
                  <td><?php echo $date ?></td>
              </tr>
              <?php 
                  }  
              ?>
              
            </tbody>
          </table>
          </div>


        
        

         <!-- Orders Table -->
      <div class="tableWrapper orders"> 
      <h3 class="heading">Orders</h3>
          <table class="styled-table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Customer Name</th>
                <th>Product</th>
                <th>Quantity</th>
                <th>Date</th>
              </tr>
            </thead>
            <tbody>

            <!-- Loop through database -->  
              <?php 
                                
                while($row=mysqli_fetch_assoc($result1))
                {
                    $id = $row['order_id'];
                    $custName = $row['customer_name'];
                    $product = $row['product_name'];
                    $qty_ordered = $row['qty_ordered'];
                    $date = $row['date_ordered'];
                ?>
              <tr>
                  <td><?php echo $id ?></td>
                  <td><?php echo $custName ?></td>
                  <td><?php echo $product ?></td>
                  <td><?php echo $qty_ordered ?></td>
                  <td><?php echo $date ?></td>
              </tr>
              <?php 
                  }  
              ?>
            </tbody>
          </table>
          </div>

      </section>
    </div>

    <!-- End Content -->
  </body>
</php>
