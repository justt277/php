
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <form action="" method="post">

    F_name<input type="text" name="F_name"><br><br>
     L_name<input type="text" name="L_name"><br><br>
     Position<input type="text" name="Position"><br><br>
    Salary<input type="number" name="Salary"><br><br>
    HireDate<input type="date" name="HireDate"><br><br>
    <button type="submit" name="submit">update</button>
  
 </form>
 <?php
 include 'connect.php';

$E_id=$_GET['E_id'];
$select=mysqli_query($conn,"SELECT * FROM employee WHERE E_id='$E_id'");
$row=mysqli_fetch_array($select);

 if (isset($_POST['submit'])) {

  $F_name=$_POST['F_name'];
  $L_name=$_POST['L_name'];
  $Position=$_POST['Position'];
 $Salary=$_POST['Salary'];
 $HireDate=$_POST['HireDate'];

 $update=mysqli_query($conn,"UPDATE employee SET F_name='$F_name',L_name='$L_name',Position='$Position',='$Salary',HireDate='$HireDate' WHERE E_id='$E_id' ");
        if ($update) {
            echo "<script>alert('update successfully');</script>";
            //header("location:select.php");
        } else {
            echo "Data not update: " . mysqli_error($conn);
        }
    }
    ?>
</body>
</html>