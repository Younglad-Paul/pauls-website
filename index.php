<?php
session_start();

include("connection.php");
include("functions.php");


$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>INDEX</title>
</head>
<body>
    <h1 style="color:#fff;">
        THIS IS THE INDEX PAGE
    </h1>

    <a href="logout.php" style="text-decoration:none; color:white;">LOGOUT</a>
    
    <h3 style="color:green;">Hello Username</h3>
</body>
</html>