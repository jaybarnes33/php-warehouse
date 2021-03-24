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
    <?php include "../components/Sidebar.php"; ?>
    <!-- Content -->
    <div class="content">
    <?php include "../components/Header.php"; ?>
     
      <section class="statistics">
        <div class="statItem">
          <span class="number mr-2">60</span>Products in stock
        </div>
        <div class="statItem"><span class="number mr-2">5</span>Users</div>
        <div class="statItem">
          <span class="number mr-2">20</span>Products sold
        </div>
      </section>

      <section class="tables">
        <div class="tableWrapper products">
          <h3 class="heading">Products</h3>
          <table class="styled-table">
            <thead>
         
              <tr>
                <th>ID</th>
                <th>Date Added</th>
                <th>Name</th>
                <th>Stock</th>
                <th>Price</th>
              </tr>
            </thead>
            <tbody>
            <?php for ($i = 0; $i < 10; $i++) {
              echo "<tr>
 <td>Dom</td>
 <td>6000</td>
 <td>Dom</td>
 <td>Admin</td>
 <td>Dom</td>
</tr>";
            } ?>
             
              <!-- and so on... -->
            </tbody>
          </table>
        </div>

        <div class="tableWrapper users">
          <h3 class="heading">Users</h3>
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
              <?php for ($i = 0; $i < 10; $i++) {
                echo "<tr>
                    <td>Dom</td>
                    <td>6000</td>
                    <td>Dom</td>
                    <td>Admin</td>
                    <td>Dom</td>
                    </tr>";
              } ?>
              
              <!-- and so on... -->
            </tbody>
          </table>
        </div>
        <div class="tableWrapper orders">
          <h3 class="heading">Orders</h3>
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
              <tr>
                <td>Dom</td>
                <td>6000</td>
                <td>Dom</td>
                <td>Admin</td>
                <td>Dom</td>
              </tr>
              <tr>
                <td>Melissa</td>
                <td>5150</td>
                <td>Melissa</td>
                <td>Mangager</td>
                <td>Melissa</td>
              </tr>
              <tr>
                <td>Dom</td>
                <td>6000</td>
                <td>Dom</td>
                <td>Teller</td>
                <td>Dom</td>
              </tr>
              <tr>
                <td>Melissa</td>
                <td>5150</td>
                <td>Melissa</td>
                <td>Melissa</td>
              </tr>
              <tr>
                <td>Dom</td>
                <td>6000</td>
                <td>Dom</td>
                <td>Teller</td>
                <td>Dom</td>
              </tr>
              <tr>
                <td>Melissa</td>
                <td>5150</td>
                <td>Melissa</td>
                <td>Loader</td>
                <td>Melissa</td>
              </tr>
              <!-- and so on... -->
            </tbody>
          </table>
        </div>
      </section>
    </div>

    <!-- End Content -->
  </body>
</php>
