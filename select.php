<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <table border="2">
<tr>
    <th>E_id</th>
    <th>F_name</th>
    <th>L_name</th>
    <th>Position</th>
    <th>Salary</th>
    <th>HireDate</th>
    <th colspan="2">Optoin</th>
</tr>
<?php
include('connect.php');
$select=mysqli_query($conn,"SELECT * FROM employee");
while ($row=mysqli_fetch_array($select)) {

?>
<tr>
    <td><?php echo $row ['E_id']?></td>
    <td><?php echo $row ['F_name']?></td>
    <td><?php echo $row ['L_name']?></td>
    <td><?php echo $row ['Position']?></td>
    <td><?php echo $row ['Salary']?></td>
    <td><?php echo $row ['HireDate']?></td>

    <td><a href="update.php?E_id=<?php echo $row ['E_id']?>">UPDATE</a></td>
    <td><a href="delete.php?E_id=<?php echo $row ['E_id']?>">DELETE</a></td>
</tr>
<?php
}
?>
<a href="insert.php">Add New</a>
 </table>   
</body>
</html>