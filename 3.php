<!-- 
fopen()
fclose()
fread()
fwrite()
feof()
fgets():read only first line of file;fgetc()-reads whole file char by char
fget()
readfile(filename):used to read the content of txt files
filesize()
 -->

 <?php
// $var = readfile("sample.txt");
// echo $var

echo readfile("sample.txt");
echo "<br>";
$fh1 = fopen("sample.txt","r");     
// echo fread($fh1,filesize("sample.txt"));    //filesize can read the file till we want by passing desired size

// // file handler has total 8 types of permissions:r/w/a/x(create)/r+(read +write)/w+(read+write+create)/a+(read+write+create+append)/x+(read+write+create)

// $fh1 = fopen("sample.txt","w");   
// $str="Graphic ERa University........";
// fwrite($fh1,$str);      
// echo readfile("sample.txt");

echo fgets($fh1);

for($i=0;$i<3;$i++){
    echo $i;
}
echo "<br>";

fclose($fh1);           //further operations won't be saved for the file as the file is closed

?>