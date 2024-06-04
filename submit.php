<?php
$user='root';
$pass='';
$db='aaa';
$con=mysqli_connect('localhost',$user,$pass,$db)or
    die("connection failed:".mysqli_connect_error());

echo "Connection Success";
$employee_id = $_POST['employee_id'];
$name = $_POST['name'];
$email = $_POST['email'];
$salary = $_POST['salary'];
$phone = $_POST['phone'];
$sql = "INSERT INTO employee (employee_id, name, email, salary, phone)
VALUES ('$employee_id', '$name', '$email', '$salary', '$phone')";
if(mysqli_query($con,$sql))
{
    echo "New Record Created";
}
else{
    echo "Error".$sql."<br>".mysqli_error($con);
}
mysqli_close($con);
?>