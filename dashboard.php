<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>dashboard</title>
</head>
<body>
    <center>
    <h1>students list</h1>
    <button><a href="index.php">home</a></button>
    </center>
</body>
</html>
<?php
include("connect.php");

$result = mysqli_query($conn, "SELECT * FROM students");

if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}

while ($row = mysqli_fetch_assoc($result)) {
    echo "ID: " . $row["s_id"] . " - Name: " . $row["s_name"] . "<br>";
}

mysqli_close($conn);
?>