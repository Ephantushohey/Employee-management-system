<?php

require_once ('dbh.php');

$id = $_POST['id'];
$employee_name = $_POST['employee_name'];
$password = $_POST['password'];
$clock_in = $_POST['clock_in'];
$clock_out = $_POST['clock_out'];
$Reports = $_POST['Reports'];

$sql = "INSERT INTO `attendance`(`id`, `employee_name`, `password` , `clock_in`, `clock_out`, `Reports`) 
VALUES ('$id' , '$employee_name' , '$password' , '$clock_in', '$clock_out', '$Reports')";

$result = mysqli_query($conn, $sql);


if(($result) == 1){
    
    
    header("Location: ..//attendance.php");
}

else{
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Failed to Record Attendance')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
}




?>