<h3 class="heading">Users </h3>
          <table class="styled-table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Username</th>
                <th>Role</th>
                <th>Date</th>
                <th>Edit</th>  
                <th>Delete</th>
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
                  <td><a href="../user/edit.php?GetID=<?php echo $id ?>"><img  src="../images/eraser.svg" alt="Edit"></a></td>
                  <td><a href="../user/delete.php?Del=<?php echo $id ?>"> <img  src="../images/cancel.svg" alt="Delete"> </a></td>
              </tr>
              <?php 
                  }  
              ?>
              
            </tbody>
          </table>