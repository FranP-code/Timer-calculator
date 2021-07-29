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
    $working = false;

    for ($i = 0; $i < sizeof($_POST); $i++) {
        if (strpos(array_keys($_POST)[$i], $keyTypeOfTime)) {
            
            if (empty($_POST[array_keys($_POST)[$i]])) {
                $_POST[array_keys($_POST)[$i]] = 0;
            }

            
            if(filter_var($_POST[array_keys($_POST)[$i]], FILTER_VALIDATE_INT)) {
                $working = true;
            }
            
            if ($working == true) {
               $totalTime = $totalTime + $_POST[array_keys($_POST)[$i]];
            }
            if(!valid_range_number($totalTime)) {
                header('Location: index.html');
            }

            } 
        }
    
    return $totalTime;
    }

function valid_range_number($inputWhatever) {    
    if ($inputWhatever <= 99999 && $inputWhatever >= 0) {
        return true;
    } else {
        return false;
    }
}

function style_number($inputWhatever) {
    if ($inputWhatever < 10) {
        return '0'. $inputWhatever;
    } else {
        return $inputWhatever;
    }
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

echo '<br>' . $minutes;

//* CALCULAR MINUTOS

$minutes = $minutes + select_time('_n3');

//* PASAR MINUTOS 'DE MAS' A HORAS

while ($minutes >= 60) {
    $minutes = $minutes - 60;

    $hours++;
}

//? CALCULAR HORAS

$hours = $hours + select_time('_n1');

echo '<br>' . $hours;

//! RETOQUES FINALES

$seconds = style_number($seconds);
setcookie('seconds', $seconds, time() + 3600, './');
$minutes = style_number($minutes);
setcookie('minutes', $minutes, time() + 3600, './');
$hours = style_number($hours);
setcookie('hours', $hours, time() + 3600, './');

header('Location: ./result.php');