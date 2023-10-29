<?php

const y_min = -5;
const y_max = 3;

function isValid($x, $y, $R) {
    $flag = true;
    if (isset($x) && isset($y) && isset($R)) {
        if (($y >= y_min) && ($y <= y_max) && in_array($x, range(-3, 5)) && in_array($R, range(1, 5))) {$flag = true;}
        else {$flag = false;}
    }
    else {$flag = false;}

    return $flag;
}
function firstQuadrant($x, $y, $R) {
    return ($y <= $R - $x) && ($y >= 0) && ($x >= 0);
}
function thirdQuadrant($x, $y, $R) {
    return ($x ** 2 + $y ** 2 <= ($R/2) ** 2) && ($y <= 0) && ($x <= 0);
}
function fourthQuadrant($x, $y, $R) {
    return ($x <= ($R/2)) && ($y >= -$R) && ($x >= 0) && ($y <= 0);
}
function isHit($x, $y, $R) {
    return firstQuadrant($x, $y, $R) || thirdQuadrant($x, $y, $R) || fourthQuadrant($x, $y, $R);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    date_default_timezone_set('Europe/Moscow');
    $xx = $_POST["xType"];
    $yy = $_POST["yType"];
    $RR = $_POST["RType"];

    if (isValid($xx, $yy, $RR)) {
        $startScriptTime = microtime(true);
        $currentTime = date("H:i:s");
    
        $hitResult = isHit($xx, $yy, $RR);
        if ($hitResult) {
            $hitResult = 'True';
        } else if ($hitResult == False) {
            $hitResult = 'False';
        }
        $scriptExecutionTime = round((microtime(true) - $startScriptTime) * 1000000, 2);
        $receivedData = array(
            "x" => $xx,
            "y" => $yy,
            "R" => $RR,
            "isHit" => $hitResult,
            "currentTime" => $currentTime,
            "scriptTime" => $scriptExecutionTime,
        );
    
        echo json_encode($receivedData);
    }
    else {
        http_response_code(502);
        exit();
    }


}
?>