<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="data">MY NAME IS - <br>
    <?php
    echo $_COOKIE['username'];
    ?>
    </div><br>
<div class="data" >MY MAIL ID IS - <br> 
<?php
echo $_COOKIE['email'];
?>
</div><br>
<div class="data" >MY GENDER IS - <br>
    <?php 
echo $_COOKIE['gen'];
?>
</div><br>
<div class="data" >MY FAV LANGUAGE IS - <br>
<?php
if(isset($_COOKIE['lang1'])){
    echo $_COOKIE['lang1'];
}
?><br>
<?php
if(isset  ($_COOKIE['lang2'])){
    echo $_COOKIE['lang2'];
}
?><br>
<?php
if(isset ($_COOKIE['lang3'])){
    echo $_COOKIE['lang3'];
}
?><br>
<?php
if(isset ( $_COOKIE['lang4'])){
    echo $_COOKIE['lang4'];
}
?>
</div><br>
<div class="data">I AM FROM - <br>
<?php

switch ($_COOKIE['city']){
       case "delhi":
        echo "you are from delhi";
        break;


        case "almora":
        echo"you are from almora";
        break;


        case "pithoragrah":
        echo "you are from pithoragrah";
        break;

        default:
        echo "city not selected";



}
?>

</div>
    
</body>
</html>