
          <h3 class="heading">Products</h3>
          <table class="styled-table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Date Added</th>
                <th>Product Name</th>
                <th>Stock</th>
                <th>Price</th>
                <th>Edit</th>  
                <th>Delete</th>
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
                  <td><a href="../product/edit.php?GetID=<?php echo $id ?>"><img  src="../images/eraser.svg" alt="Edit"></a></td>
                  <td><a href="../product/delete.php?Del=<?php echo $id ?>"> <img  src="../images/cancel.svg" alt="Delete"> </a></td>
              </tr>
              <?php 
                  }  
              ?>
            </tbody>
          </table>
          