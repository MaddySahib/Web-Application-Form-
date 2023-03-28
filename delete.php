<?php
include "config.php";


if(isset($_GET['id'])){
    $users_id = $_GET['id'];

    $sql = "DELETE FROM users WHERE id = '$users_id' ";

    $result = $conn->query($sql);

    if($result == TRUE){
        echo "Record delete Succuessfully";
    }else{
        echo "Error" .$sql . "<br>" . $conn->error;
    }
  
}
   /* $sql = "DELETE FROM users WHERE id='$_GET[id]' " ;

if ($conn->query($sql) === TRUE) {
	
 echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}*/
header("location:view.php");
$conn->close();
?>