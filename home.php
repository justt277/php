<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
   session_start();
   if (isset($_POST['E_id'])) {
    $_SESSION['E_id']=$_POST['E_id'];

   }
   
   ?>
   <h2>welcome <?php echo $_SESSION['E_id']=$_POST['E_id']?></h2>
   <a href="employee/select.php">About</a>
</body>
</html>