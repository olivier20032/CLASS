<?php
include "connect.php";

$s_id=$_GET['s_id'];
$query=mysqli_query($conn,"SELECT * FROM students WHERE s_id='$s_id'");
$row=mysqli_fetch_array($query);
$s_name=$row['s_name'];
$s_number=$row['s_number'];
$s_option=$row['s_option'];
$rp=$row['s_college'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Form</title>

</head>
<body>
<center>
    <h1>Student  UPDATE</h1>
    
    <fieldset>
        <legend><h4>RP</h4></legend>
        <form action="" method="POST">
            
          
            <input type="hidden"  name="s_id" value="<?php echo $s_id ?>"><br><br>

            <label for="name">Name:</label>
            <input type="text"  name="s_name" value="<?php echo $s_name ?>"><br><br>
            
            <label for="reg_number">Reg number:</label>
            <input type="text"  name="s_number" value="<?php echo $s_number ?>"><br><br>
            
            <label for="reg_number">option:</label>
            <input type="text"  name="s_option" value="<?php echo $s_option ?>"><br><br>
            <label for="">COLLEGE:</label>
            <select name="rp" id="" value="<?php echo $rp ?>">
                <option value="Musanze">Musanze</option>
                <option value="Kigali">Kigali</option>
                <option value="HUYE">HUYE</option>
                <option value="TUMBA">TUMBA</option>

            </select><br><br>
            <input type="submit" value="Submit" name="update">
        </form>
    </fieldset>
</center>
    
<?php
include("connect.php");

if(isset($_POST['update'])){
    $s_id=$_POST['s_id'];
    $names=$_POST['s_name'];
    $reg_number=$_POST['s_number'];
    $option=$_POST['s_option'];
    $rp=$_POST['rp'];
  
   $query = mysqli_query($conn,"UPDATE students SET s_name='$names',s_number='$reg_number',s_option='$option',s_college='$rp'WHERE s_id='$s_id'");


    if($query==true){
        echo "data is UPDATED!!";
    }
    else{
        echo "failed to record data!";
    }
    header('location:select.php');
}

?>
</body>
</html>




