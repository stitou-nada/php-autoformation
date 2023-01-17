<h1>Exmple 1</h1>
<!-- La fonction PHP strlen()renvoie la longueur d'une chaîne. -->
<?php
echo strlen("Hello world!"); // outputs 12
?>

<h1>Exmple 2</h1>
<!-- La fonction PHP str_word_count()compte le nombre de mots dans une chaîne. -->
<?php
echo str_word_count("Hello world!"); // outputs 2
?>


<h1>Exmple 3</h1>
<!-- La fonction PHP strrev()inverse une chaîne. -->
<?php
echo strrev("Hello world!"); // outputs !dlrow olleH
?>
<h1>Exmple 4</h1>
<!-- Recherchez le texte « monde » dans la chaîne « Hello world ! » :  -->
<?php
echo strpos("Hello world!", "world"); // outputs 6
?>
<h1>Exmple 5</h1>
<!-- La fonction PHP str_replace()remplace certains caractères par d'autres caractères dans une chaîne. -->
<?php
echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!
?>
