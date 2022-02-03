<?php
//w+ est utilisé pour ouvrir le fichier pour écrire et lire les deux.
// Si les fichiers n'existent pas, il tente de créer un fichier. Place le fichier
// pointeur au début du fichier.
$filename = 'readme.txt';


$f = fopen($filename, 'w+');
if ($f) {
    // process the file
    // ...
    echo 'The file ' . $filename . ' is open';
    fclose($f);
}