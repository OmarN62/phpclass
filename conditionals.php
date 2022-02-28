<?php
$myGrade = 70;

$needsImprovement = 69;
$satisfactory =  85;
$exceedsExpectations = 100;

if ($myGrade <= $needsImprovement){
    echo("Your grade needs work!");
}elseif($myGrade <= $satisfactory){
    echo("You're doing well...");
}
else{
    echo("You're doing excellent! test for github");
}
?>
