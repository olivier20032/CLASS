<?php

$server="localhost";
$username="root";
$password="";
$dbname="rp11";

$conn= mysqli_connect("$server","$username","$password","$dbname");
 
if($conn==true){
    // echo "connection is successfull";

}
else{
    echo "fail to connect";
}

?>