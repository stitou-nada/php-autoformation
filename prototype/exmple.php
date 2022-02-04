<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
            // declaration des variable
            $trouve;
            $listNumbers;
            $userInput; 
            // saisire
            $listNumbers = array(1 ,10, 4, 987, 9) ;
            $trouve = false;
            $userInput = window.prompt('Entrez une valeur pour userInput');

            // traitment
            for ($i = 0; $i <= 4; $i++); {
                if (userInput == listNumbers[i]) {
                   $trouve = true;
                }
            }
            if ($trouve) {
                window.alert("le nombre n'existe dans la position " + $i);
            } else {
                window.alert("le nombre n'existe pas");
            }
        
    ?>
</body>

</html>