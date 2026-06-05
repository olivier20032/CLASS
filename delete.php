<?php
include "connect.php";
$id=$_GET['s_id'];
$query = mysqli_query($conn, "DELETE FROM students WHERE s_id='$id'");

header('location:select.php');
?>