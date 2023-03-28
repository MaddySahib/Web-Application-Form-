<?php
include "config.php";

if (isset($_POST['update']) && isset($_POST['id'])) {
    $firstname = $_POST['firstname'];
    $user_id = $_POST['id'];
    $lastname = $_POST['lastname'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];

    $sql = "UPDATE users SET  firstname = '$firstname', lastname = '$lastname',
    address = '$address', email = '$email', gender = '$gender', password = '$password' WHERE id ='$user_id' ";

    $result = $conn->query($sql);

    if ($result == TRUE) {
        echo "Recordn Updated SuccesFully";

        header("location:view.php");
    } else {
        echo "Error" . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
if (isset($_GET['id'])) {
    $user_id = $_GET['id'];
    $sql = "SELECT *FROM users WHERE id = '$user_id' ";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $user_id = $row['id'];
            $firstname = $row['firstname'];
            $lastname = $row['lastname'];
            $address = $row['address'];
            $email = $row['email'];
            $gender = $row['gender'];

?>


            <!DOCTYPE html>
            <html>

            <head>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
            </head>

            <body>

                <div class="container" style="max-width: 540px" ;>
                <div class="border" style="padding: 20px; margin:20px">
                    <form action="update.php" class="form-group" method="post">
                        <h2 class="text-center" ; style="margin: 40px 0px 40px">User Update</h2>
                        <div class="row md-4">
                            <div class="col">
                                <div class="form-outline">
                                    Fist Name<br>
                                    <input type="text" name="firstname" value="<?php echo $firstname;  ?>" class="form-control">
                                 <input type="hidden" name="id" value="<?php echo $user_id; ?>">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-outline">
                                    Last Name<br>
                                    <input type="text" name="lastname" class="form-control" value="<?php echo $lastname; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-outline">
                            Address<br>
                            <input class="form-control" type="address" name="address" value="<?php echo $address; ?>">
                        </div>
                        <div class="form-outline">
                            Email<br>
                            <input class="form-control" type="text" name="email" value="<?php echo $email; ?>">
                        </div>
                        <div class="form-outline">
                            Password:<br>
                            <input class="form-control" type="password" name="password" value="<?php echo $password; ?>">
                        </div>
                        <br>
                        Gender:<br>
                        <input type="radio" name="gender" value="Male" <?php if ($gender == "Male") {
                                                                            echo "checked";
                                                                        } ?>>Male
                        <input type="radio" name="gender" value="Female" <?php if ($gender == "Female") {
                                                                                echo "checked";
                                                                            } ?>>Female
                        <br><br>
                        <input class="btn btn-success" type="submit" name="update" value="Update">
                        <?php

                        ?>
                    </form>
                    </div>
                </div>
            </body>

            </html>


<?php

        }
    }
}

/*if(isset($_GET['id'])){
    $user_id = $_GET['id'];

    $sql = "SELECT FROM users WHERE id = '$user_id' ";

    $result = $conn->query($sql);
    
   if($result->num_rows> 0){
    while($row = $result->fetch_assoc()){
       /* $firstname = $rows['firstname'];
        $lastname = $rows['lastname'];
        $address = $rows['address'];
        $email = $rows['email'];
        $gender = $rows['gender'];
        $id = $rows['id'];*/

/*   }
}
}*/
?>