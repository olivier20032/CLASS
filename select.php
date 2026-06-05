<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>StudentID</th>
            <th>StudentName</th>
            <th>StudentReg</th>
            <th>Studentoption</th>
            <th>Studentcollege</th>
            <th colspan='2'>operation link</th>
        </tr>
 
<?php
include "connect.php";
$select= mysqli_query($conn,"SELECT * FROM students");

while($row=mysqli_fetch_array($select)){
    ?>
    <tr>
    <td><?php echo $row['s_id'];?></td>
    <td><?php echo $row['s_name'];?></td>
    <td><?php echo $row['s_number'];?></td>
    <td><?php echo $row['s_option'];?></td>
    <td><?php echo $row['s_college'];?></td>
    <td><button><a href="delete.php?s_id=<?php echo $row['s_id'];?>">delete</a></button></td>
    <td><button><a href="update.php?s_id=<?php echo $row['s_id'];?>">Update</a></button></td>
</tr>

<?php
}
?>
   </table>   
    
</body>
</html>


