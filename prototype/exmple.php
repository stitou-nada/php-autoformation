<?php
$trouve = False;
$listNumbers = array();

$listNumbers[0] = 1;
$listNumbers[1] = 10;
$listNumbers[2] = 4;
$listNumbers[3] = 987;
$listNumbers[4] = 9;
$userInput = 11;
for ($i = 0; $i <= 4; $i++) {
    if ($userInput == $listNumbers[$i]) {
        $trouve = True;
    }
}
if ($trouve) {
    echo "le nombre existe" ;
} else {
    echo "le nombre n'existe pas " ;
}
?>
