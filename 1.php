<?php
$conn = mysqli_connect('127.0.0.1', 'root', '', 'barmaley', 3306);

$result = mysqli_query($conn, 'SELECT name FROM dict WHERE name LIKE \'%x\' ORDER BY name DESC;');

while ($row = mysqli_fetch_assoc($result)) {
    echo $row['name'].'<br>';
}
