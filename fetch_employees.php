<?php
$user="root";
$pass="";
$db="aaa";

$conn=mysqli_connect('localhost',$user,$pass,$db)or
    die("connection failed".mysqli_connect_error());
    $sql="select * from employee where employee_id BETWEEN 1 AND 10";
    $res=mysqli_query($conn,$sql);
    echo "$res";
    mysqli_close($conn);
    ?>