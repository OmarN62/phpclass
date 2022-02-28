<?php
# creating functions, getState and getDestination, arrays
function getState(){
    $stateArray = array("New York",
    "Connecticut",
    "California",
    "Massachusets",
    "Texas");
    return $stateArray;
    
}
function getDestination(){
    $destinationArray = array("Eastern Carribean",
    "Southern Carribean",
    "Western Carribean",
    "Bermuda",
    "Bahamas");
    return $destinationArray;
    
} 

# creating oneState function to pull one state from an array.
$state = array("NY => New York", 
    "CT => Connecticut", 
    "CA => California",
    "MA => Massachusets",
    "TX => Texas");
function oneState(){
    global $state;
    switch ($state){
        case "NY";
        echo "Your state is NY";
        break;
        case "CT";
        echo "Your state is CT";
        break;
        case "CA";
        echo "Your state is CA";
        break;
        case "MA";
        echo "Your state is MA";
        break;
        case "TX";
        echo "Your state is TX";
        break;
        default:
        echo "You didn't choose what state you're in.";

    }
}

?>