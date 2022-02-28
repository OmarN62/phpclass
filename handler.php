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
$mail_List = $_POST["mail_List"];
$JOIN_VAR = "<strong>Thank you,<strong><br><br> " .$firstname. " <br>We have recorded the following entry <br><br>";

$userFriendlyState = "";
// $displayedCity
switch($state) { wooo
    case "CT":
        $userFriendlyState = "Connecticut";
        break;
    case "NY":
        $userFriendlyState = "New York";
        break;

}
echo  $JOIN_VAR;
echo "<strong>Name: <strong>" .$firstname. " " .$lastname. "<br>";
echo "<strong>City: <strong>" .$city. "<br>";
echo "<strong>State Residence: <strong>" .$state. "<br>";
echo "<strong>Preferred Destination :<strong>" .$preferred. "<br>";

echo "<br><br>";

if ($mail_List === "Yes, I would.") {
    echo "You have opted to be on our mailing list.";
}
else {
    echo "You have not opted to be on our mailing list.";
}
?> 