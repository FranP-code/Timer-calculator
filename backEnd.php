<?php

echo print_r($_POST);

echo print_r(array_keys($_POST));

$seconds = 0;
$minutes = 0;
$hours = 0;

/**
 * 
 * TODO;  '_n5' === SECONDS
 * 
 * TODO;  '_n3' === MINUTES
 * 
 * TODO;  '_n1' === HOURS
 * 
*/

function select_time($keyTypeOfTime) {

    $totalTime = 0;

    for ($i = 0; $i < sizeof($_POST); $i++) {
        if (strpos(array_keys($_POST)[$i], $keyTypeOfTime)) {
            $totalTime = $totalTime + $_POST[array_keys($_POST)[$i]];
            }
        }
    
    return $totalTime;
    }


//! CALCULAR SEGUNDOS

$seconds = $seconds + select_time('_n5');

echo '<br>' . $seconds;

//! PASAR SEGUNDOS 'DE MAS' A MINUTOS

while ($seconds >= 60) {
    $seconds = $seconds - 60;
    echo '<br>' . $seconds;

    $minutes++;

}

if ($seconds < 10) {
    $seconds = '0'. $seconds;
}

echo '<br>' . $minutes;

//* CALCULAR MINUTOS

$minutes = $minutes + select_time('_n3');

echo '<br>' . $minutes;

//* PASAR MINUTOS 'DE MAS' A HORAS

while ($minutes >= 60) {
    $minutes = $minutes - 60;
    echo '<br>' . $minutes;

    $hours++;
}

if ($minutes < 10) {
    $minutes = '0'. $minutes;
}
//? CALCULAR HORAS

$hours = $hours + select_time('_n1');

echo '<br>' . $hours;

if ($hours < 10) {
    $hours = '0'. $hours;
}

setcookie('hours', $hours, time() + 3600, './');
setcookie('minutes', $minutes, time() + 3600, './');
setcookie('seconds', $seconds, time() + 3600, './');

header('Location: ./result.php');