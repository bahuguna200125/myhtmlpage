<?php

echo hello(3," amit "," almora ");

function hello($lineno,$name,$city){
    $hello = "hello ".$lineno.$name.$city. "<br>";
return $hello;

} 

?><br><br>
<?php
 

function result($obtained,$total){
 $percentage = ($obtained/$total)*100 ;
    return  $percentage ;

}
echo result(1500,2000);
echo "<br>";
echo result(500,800);
echo "<br>";
echo result(850,1000);
?><br>
<?php
$subarray=["hindi"=>50,"eng"=>88,"phy"=>99,"che"=>66, "math"=>77];

function subject ($subarray){
    return $subarray["hindi"];
}
echo subject($subarray);
?><br>
<?php
$subarray2=["hindi"=>90,"eng"=>95,"phy"=>96,"che"=>97, "math"=>99];
function add($subarray2) {
 $addition =  $subarray2["hindi"]+$subarray2["eng"]+$subarray2["phy"]+$subarray2["che"]+$subarray2["math"] ;
 return $addition;
}
echo add($subarray2);
echo "<br>";
$obtainemarks=add($subarray2);
echo result($obtainemarks,500);
?><br>
<?php
$sem1array=["os"=>80,"cn"=>70,"daa"=>75,"iwt"=>77,"cyber"=>67];
$sem2array=["micro"=>88,"compiler"=>76,"dataanalytics"=>74,"graph"=>73,"cloud"=>63];

function semadd1($sem1array){
    $add = $sem1array["os"]+$sem1array["cn"]+$sem1array["daa"]+$sem1array["iwt"]+$sem1array["cyber"];
return $add;
}
echo semadd1($sem1array);
$sem1 = semadd1($sem1array);
echo "<br>";
echo result($sem1,500);
?><br>
<?php

function semadd2($sem2array){
    $add = $sem2array["micro"]+$sem2array["compiler"]+$sem2array["dataanalytics"]+$sem2array["graph"]+$sem2array["cloud"];
return $add;
}
echo semadd2($sem2array);
$sem2 = semadd2($sem2array);
echo "<br>";
echo result($sem2,500);


$a=100;
for($a=100;$a<=120;$a++){
echo $a;
echo "<br>";
}