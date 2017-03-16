<?php
/**
 * Created by PhpStorm.
 * User: riima
 * Date: 16/03/2017
 * Time: 15:11
 */

$conversion = array(
    'A' => 'Y',
    'B' => 'P',
    'C' => 'L',
    'D' => 'T',
    'E' => 'A',
    'F' => 'V',
    'G' => 'K',
    'H' => 'R',
    'I' => 'E',
    'J' => 'Z',
    'K' => 'G',
    'L' => 'M',
    'M' => 'S',
    'N' => 'H',
    'O' => 'U',
    'P' => 'B',
    'Q' => 'X',
    'R' => 'N',
    'S' => 'C',
    'T' => 'D',
    'U' => 'I',
    'V' => 'J',
    'W' => 'F',
    'X' => 'Q',
    'Y' => 'O',
    'Z' => 'W',
);

$string = "J.A.I.M.E.L.E.S.L.I.C.O.R.N.E.S";

function translator($string,$conversion){
    $newstring = array();

    $pieces  = explode('.',$string);

    for ($i=0; $i < sizeof($pieces); $i++){
        foreach ($conversion as $key => $value) {
            if ($key==$pieces[$i]){
                array_push($newstring,$value);
            }
        }
    }
    $end = implode('.',$newstring);
    print($end);
}

translator($string,$conversion);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Al-Bhed translator</title>
    <meta charset="utf-8" />
</head>
<body>

</body>
</html>


