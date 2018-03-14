<?php
$dir ='tests/';
$list=scandir($dir);
$z=count(scandir('tests/'))-1;
$x=2;
do {
    echo $list[$x],"  ", "Это тест номер ", $x-1, "</br>";

}   while ($x++<$z);


?>