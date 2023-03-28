<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";
//create Connection
/*$conn = new mysqli($servername,$username,$password,$dbname );
    //check connection
    if($conn -> connect_error){
        die("Connection Faild: " . $conn ->connect_error);
    }*/
  $conn = mysqli_connect($servername,$username,$password,$dbname);  
   
    if (!$conn) {
    die("Connection Failed:" .mysqli_connect_error());
  }
?>