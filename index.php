<?php

# Ex - To print any day by insert number from 1 to 7 
function printDays(int $numDay = 1) {
    switch ($numDay) {
        case '1':
            echo 'Monday';
        break;
        case '2':
            echo 'Tuesday';
        break;
        case '3':
            echo 'Wednesday';
        break;
        case '4':
            echo 'Thursday';
        break;
        case '5':
            echo 'Friday';
        break;
        case '6':
            echo 'Saturday';
        break;
        case '7':
            echo 'Sunday';
        break;
        default:
        echo 'Enter correct number to show days of weak fom 1 to 7';
    }
}

printDays(2);


echo '<br />--------------------------------------------------------';

# Ex - Multi dimensial array
$studentInfo = array (
    array ('ahmed', 20, 2.5),
    array ('mohamed', 25, 7.2),
    array ('ali', 23, 5.2),
    array ('yaser', 22, 5.5),
    array ('jhon', 25, 2.2)

);

foreach($studentInfo as $data) {
    echo "<br />";
    foreach($data as $info) {
        echo $info . ", ";
    }
}