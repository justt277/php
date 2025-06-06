<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <form action="" method="post">
	E_id<input type="number" name="E_id"><br><br>
    F_name<input type="text" name="F_name"><br><br>
     L_name<input type="text" name="L_name"><br><br>
     Position<input type="text" name="Position"><br><br>
    Salary<input type="number" name="Salary"><br><br>
    HireDate<input type="date" name="HireDate"><br><br>
    <button type="submit" name="submit">submit</button>
  
 </form>
 <?php
 include('connect.php');
 if (isset($_POST['submit'])) {
 $E_id=$_POST['E_id'];
  $F_name=$_POST['F_name'];
  $L_name=$_POST['L_name'];
  $Position=$_POST['Position'];
 $Salary=$_POST['Salary'];
 $HireDate=$_POST['HireDate'];

 $insert=mysqli_query($conn,"INSERT INTO employee (E_id,F_name,L_name,Position,Salary,HireDate) VALUES('$E_id','$F_name','$L_name','$Position','$Salary','$HireDate')");
        if ($insert) {
            echo "<script>alert('Data inserted successfully');</script>";
        } else {
            echo "Data not inserted: " . mysqli_error($conn);
        }
    }
    ?>
      <a href="select.php">see</a>
</body>
</html>