<?php 

    require_once("../include/connection.php");
    $query2 = " SELECT * FROM Products; ";
    $result2 = mysqli_query($con,$query2);

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
    <?php include ("../components/Sidebar.php")?>

    <!-- Content -->
    <div class="content">
      <?php include("../components/Header.php")?>

      <!--Product Table -->
      <section class="tables">
        <div class="tableWrapper products">
          <?php include("../tables/product_table.php") ?>
          <form action="../product/add.php"><button name="add" type="submit">+</button></form>
        </div>
      </section>
    </div>

    <!-- End Content -->
  </body>
</php>
