<?php
echo "<h1>Hello world!</h1>";
echo"<h2>".(pi())."</h2>";
$x=6;
$y=9;
echo "<h3>".$x."+".$y."=".$x+$y."</h3>";
echo "<h3>".$x."-".$y."=".$x-$y."</h3>";
echo "<h3>".$x."x".$y."=".$x*$y."</h3>";
echo "<h3>".$x."/".$y."=".$x/$y."</h3>";
echo "<h3>".$x."%".$y."=".$x%$y."</h3>";
$a="hola ";
$b="bon dia";
echo "<h4>".$a,$b."</h4>";

if ($x+$y==15){
    echo "operacio correcta";
}
else {
    echo "operacio incorrecta";
}
$z=0;
while ($z<=10) {
    echo "<h5>"."z=".$z."<h5>";
    $z++;
}