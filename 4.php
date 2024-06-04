<!--
PHP+Mysqli
1)mysqli_connect()
2)mysqli_connect_error()
3)mysqli_query()
4)mysqli_select_db()
5)mysqli_fetch_assoc()
6)mysqli_error()
7)mysqli_num_rows()
8)mysqli_close()
9)mysqli_fetch_array()
-->
<?php
$host="localhost";
$username="root";
$password="";
$dbname="csec";
$name=$_GET['v1'];
$mobile=$_GET['v2'];
$email=$_GET['v3'];
//connect to dbms

$conn=mysqli_connect($host,$username,$password,$dbname);
//$sql="CREATE DATABASE csec";
//$sql="CREATE TABLE student(name varchar(50),mbno varchar(10),email varchar(50))";
$sql="INSERT INTO student(name,mbno,email)values('$name','$mobile','$email')";
if(!$conn)
{
    die("Coonnection Fail".mysqli_connect_error());
}
else
{
    echo "Connected to the DBMS";
}
if(mysqli_query($conn,$sql))
{
    //echo "Database Created";
    //echo "Table Created";
    echo "ROW Created";
}
else{
    echo mysqli_error($conn);
}
?>