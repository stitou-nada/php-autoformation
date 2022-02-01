<?php
    if($_POST['name'] || $_POST['age']){
        
        echo "Bienvenue " . $_POST['name'] . "<br />";
        echo "Votre age est  " . $_POST['age'] . "ans.";
    }

?>
