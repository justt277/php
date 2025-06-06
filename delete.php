<?php
include('connect.php');
$E_id=$_GET['E_id'];
$delete=mysqli_query($conn,"DELETE FROM employee    WHERE E_id='$E_id'");
if ($delete) {
  header("location:select.php");
}
else{
    echo "data not inserted";
}



?>


