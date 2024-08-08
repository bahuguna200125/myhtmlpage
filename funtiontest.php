<?php
function myfuntion($name,$city){
    $gender = "male";
    return "my name is ".$name." i live in ".$city." my gender is ".$gender;

 
}

echo myfuntion("amit","almora");
 echo myfuntion("bahuguna","almora");
 ?>
 <?php
 function addition($x,$y) {
    return $x+$y;
 }
 echo addition (5,6);

 ?><br>
  <?php
 function mul($x,$y) {
    return $x*$y;
 }
 echo mul (5,6);

 ?><br>
  <?php
 function dvi($x,$y) {
    return $x/$y;
 }
 echo dvi(66,6);

 ?><br>
 <?php
 function arrayfun($names){
return $names["secound"];
 }
 $names =["first"=>"amit","secound"=>"yogita","third"=>"abhi","last"=>"bahuguna"];
 echo arrayfun($names);
 ?>
