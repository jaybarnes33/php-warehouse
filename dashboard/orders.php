<?php 

    require_once("../include/connection.php");
    $query1 = " SELECT * FROM orders; ";
    $result1 = mysqli_query($con,$query1);

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
    <?php include("../components/Sidebar.php")?>

    <!-- Content -->
    <div class="content">
      <?php include("../components/Header.php");?>

    <!-- Order-Table -->
    <section class="tables">
      <div class="tableWrapper orders">
        <?php include("../tables/order_table.php");?>
        
        <form action="../order/add.php"><button  name="add" type="submit">+</button></form>
      </div>

    </section>
      
    </div>

    <!-- End Content -->
  </body>
</php>
