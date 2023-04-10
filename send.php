<?php
require('./db.php');

$sql= "INSERT INTO messages (email,name,message) VALUES ('".$_POST['email']."','".$_POST['name']."','".$_POST['message']."')";
$result = mysqli_query(
    mysql: $conn,
    query: $sql
);