<?php
include "config.php";
$sql = "SELECT *FROM users";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>View Page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body>
          <div class="container">
            <h2 style="text-align: center; margin: 40px 0px 20px">Users</h2>
            <table class="table">

            <td> <a class="btn btn-info "style="margin: 40px 0px 20px" href="create.php">
            Add New</a>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Adress</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Action</th>
                </tr>
          <?php
          if($result->num_rows>0){

            while($row = $result->fetch_assoc()){
        ?> 
                <tr>
            <td>
                <?php
                echo $row['id'] ?>
            </td>
            <td>
                <?php
                echo $row['firstname'] ?>
            </td>
            <td>
                <?php
                echo $row['lastname'] ?>
            </td>
            <td>
                <?php
                echo $row['address'] ?>
            </td>
            <td>
                <?php
                echo $row['email'] ?>
            </td>
            <td>
                <?php
                echo $row['gender'] ?>
            </td>
            <td> <a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?>">
            Edit</a>&nbsp;<a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">
            Delete</a>
        </td>
          </tr>

            <?php
            }
        }
       ?>  
       </table>
       </div> 
    </body>
</html>