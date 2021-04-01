
        
          <h3 class="heading">Orders</h3>
          <table class="styled-table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Customer Name</th>
                <th>Product</th>
                <th>Quantity</th>
                <th>Date</th>
                <th>Edit</th>  
                <th>Delete</th>
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
                  <td><a href="../order/edit.php?GetID=<?php echo $id ?>"> <img  src="../images/eraser.svg" alt="Edit"> </a></td>
                  <td><a href="../order/delete.php?Del=<?php echo $id ?>"> <img  src="../images/cancel.svg" alt="Delete"> </a></td>
              </tr>
              <?php 
                  }  
              ?>
            </tbody>
          </table>
         
     