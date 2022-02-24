<?php

//$_POST -> method="post"
//$_GET -> method="get"
//$_REQUEST -> method="get", then method="post"
print_r($_POST);

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$state = $_POST["state"];
$preferred = $_POST["preferred"];
$city = $_POST["city"];
$mailList = $_POST["mailList"];
$JOIN_VAR = "Thank you," .$firstname. " " .$lastname.  "from the state of:" . $state. ".";


echo  $JOIN_VAR;
?> 