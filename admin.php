<?php include "header.php"?>
<table>
    <th>رقم المريض</th>
    <th>اسم المريض</th>
    <th>البريد الالكتروني</th>
    <th>التاريخ</th>

<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'hospital';
$conn = mysqli_connect($host , $user , $pass , $db);
###########################################
#fetch data from database
$result = "SELECT * FROM patients";
$send  = mysqli_query($conn , $result);

if($send){
    while($row = mysqli_fetch_assoc($send)){
        echo "<tr><td>".$row['id']."</td><td>".$row['name']."</td><td>".$row['email']."</td><td>".$row['date']."</td></tr>";
        }
        echo "</table>";
}else{
    echo "error";
}




?>
