<?php
echo $name=$_POST['v2'];
$conn=mysqli_connect("localhost","root","","csec");
$sql="select * from student where name LIKE '$name'";
$result=mysqli_query($conn,$sql);
if(mqsqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result))
    {
        echo "<br>";
        echo "Name".$row['name']."MObile".$row['mbno']."Email".$row['email'];
    }
}

?>