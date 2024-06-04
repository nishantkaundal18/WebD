<?php  
// phpinfo();
$x=10;
$y=20;
$name="GEU";
//echo "<h1> Graphic university</h1>" .$name;
//echo _LINE_;//current line no.
//echo _FILE_;//current file name
$a=10;
function test()
{
    global $a;
    $b=20;
    //echo $a+$b;
    $ar1  =array(1,2,3);
    $std = [1,2 ,3];
    //echo $ar[0];
    $ar2 = ["name"=>"fdgfd","branch"=>"CSE","rollno"=>"1234"]; //associative array
    echo  $ar2['branch'];
}
test();
print_r($ar2)
?>