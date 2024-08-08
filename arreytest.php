<?php
$subjects= ["hindi", "english","sanskrit"];
echo $subjects[0];
?><br>
<?php
echo $subjects[1];
?>



<?php
$subjects= ['firstsubject'=>"hindi", 'secoundsubject'=>"english",'thirdsubject'=>"sanskrit"];
echo $subjects['thirdsubject'];
if(isset($subjects["forthsubject"])){
    echo $subjects['forthsubject']; 
}

?><br>
<?php