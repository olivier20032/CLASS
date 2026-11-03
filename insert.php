<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <title>Form</title>

</head>
<body>
<center>
    <h1>Student Information Form</h1>
    <fieldset>
        <legend><h4>RP</h4></legend>
        <form action="" method="POST">
            
            <label for="name">ID</label>
            <input type="text"  name="s_id"><br><br>

            <label for="name">Name:</label>
            <input type="text"  name="s_name"><br><br>
            
            <label for="reg_number">Reg number:</label>
            <input type="text"  name="s_number"><br><br>
            
            <label for="reg_number">option:</label>
            <input type="text"  name="s_option"><br><br>
            <label for="">COLLEGE:</label>
            <select name="rp" id="">
                <option value="Musanze">Musanze</option>
                <option value="Kigali">Kigali</option>
                <option value="HUYE">HUYE</option>
                <option value="TUMBA">TUMBA</option>

            </select><br><br>
            <input type="submit" value="Submit" name="save">
        </form>
    </fieldset>
</center>
    
<?php
include("connect.php");

if(isset($_POST['save'])){
    $s_id=$_POST['s_id'];
    $names=$_POST['s_name'];
    $reg_number=$_POST['s_number'];
    $option=$_POST['s_option'];
    $rp=$_POST['rp'];
  
    $query=mysqli_query($conn,"INSERT INTO student(s_id,s_name,s_number,s_option,s_college) VALUES('$s_id','$names','$reg_number','$option','$rp')");

    if($query==true){
        echo "data recorded !";
    }
    else{
        echo "failed to record data!";
    }
}
?>
</body>
</html>




