<?php

    require_once("../user/noOfUsers.php");
    require_once("../order/noOfOrders.php");
    require_once("../product/noOfProducts.php");
?>


<!DOCTYPE php>
<php lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/utils.css" />
    <link rel="stylesheet" href="../css/main.css" />

    <link rel="stylesheet" href="../assets/fontawesome-free/css/all.css" />
  </head>
  <body>
    <!-- Side -->
<?php include ("../components/Sidebar.php")?>

    <!-- Content -->
    <div class="content">
      <?php include("../components/Header.php")?>

      <section class="statistics">
        <div class="statItem">
          <span class="number mr-2"><?php echo $numOfProducts ?></span>Products in stock
        </div>
        <div class="statItem"><span class="number mr-2"><?php echo $numOfUsers ?></span>Users</div>
        <div class="statItem">
          <span class="number mr-2"><?php echo $numOfOrders ?></span>Orders
        </div>
      </section>
    </div>

    <!-- End Content -->
  </body>
</php>
