<?php
$a=10;
$name="Nishant";
$b=true;
function test()
{
    $x=20;
    $y=30;
    echo $x+$y+$GLOBALS['a'];//super global variable(print any associtative array)
}
test();
echo "<br>";
print_r($GLOBALS)
?>