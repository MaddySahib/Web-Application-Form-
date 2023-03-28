<?php

include "config.php";


if(isset($_POST['submit'])){
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];


    $sql = "INSERT INTO  USERS (firstname,lastname,address,email,password,gender)
    VALUES ('$first_name','$last_name','$address','$email','$password','$gender')";
    

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
  mysqli_close($conn);
  header("Location:view.php");

}
   
     //asign to result variable for checking connection
   /* $result = $conn->query($sql);*/

    /*if($result == TRUE){
        echo "New record created Succesfully";
    }
    else{
        echo "Error". $sql . "<br>" . $conn->error;
    }

    $conn->close();*/ 
?>
<!DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container" style="max-width: 540px;">
        <div class="border" style="padding: 20px; margin:20px">
        <form class="form-group " action="create.php"  method="post">
            <h2 class="text-center"; style="margin: 20px 0px 40px">Sgin Up</h2>
            <div class="row mb-4 ">
                <div class="col">
                    <div class="form-outline">
                    <input type="text" name="firstname" class="form-control" placeholder="First Name">
                    <label class="form-label" for="form"></label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-outline">
                    <input type="text" name="lastname" class="form-control" placeholder="Last Name"/>
                    <label class="form-label" for="form"></label>
                    </div>
                </div>
            </div>
            <div class="form-outline">
                    <input type="text" name="address" class="form-control" placeholder="Address">
                    <label class="form-label" for="form"> </label>
                    </div>
            <div class="form-outline">
                    <input type="text" name="email" class="form-control" placeholder="example@email.com">
                    <label class="form-label" for="form"></label>
                    </div>
            <div class="form-outline">
                    <input type="text" name="password" class="form-control" placeholder="Password" required>
                    <label class="form-label" for="form"></label>
                    </div>
            <div style="margin-top: 30px;">
            Gender<br><br>
                Male   <input type="radio" style="margin-right: 15px;"  name="gender" value="Male">
                Female <input type="radio" name="gender" value="Female">
                <br><br>
            </div>
                
                <input class="btn btn-success "  type="submit" name="submit" value="Register">
        </form>
        </div>
        <?php
       
        ?>
        </div>
    </body>
</html>