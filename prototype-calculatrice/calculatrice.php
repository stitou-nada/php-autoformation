
<?php
    // Initialisation des variables
    $a = null;
    $b = null;
    $operation = null;
    $afficheur = "";
    $solution = null;

    // Traitement

    // Récupération des variables de la page
    if(isset($_POST['a'])) 
        $a = $_POST['a'];
    if(isset($_POST['b']))
        $b = $_POST['b'];
    if(isset($_POST['operation'])) 
       $operation = $_POST['operation'];

    // Ajouter la valeur du nombre au X ou Y
    if(isset($_POST['nombre'])){
        $nombre = $_POST['nombre'];
        if($operation == null){
            if($a == null) $a = $nombre;
            else $a = floatval($a . $nombre);
        }else{
            if($b == null) $b = $nombre;
            else $b = floatval($b . $nombre);
        }
    }

    if(isset($_POST['egale'])){
        $egale = $_POST['egale'];
    
        // Calcule
        switch($operation){
            case "+" : $solution = $a + $b;
                break;
            case "-" : $solution = $a - $b;
                break;
        }
    }
    // Affichage 
    if($solution != null) $afficheur = $solution;
    else{
        if($a != null) $afficheur = $afficheur . "$a" ;
        if($operation != null) $afficheur .= " " .  $operation . " ";
        if($b != null) $afficheur .= $b;
    }
     
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prototype calculatrice</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="a" value="<?php echo $a ?>">
    <input type="text" name="operation" value="<?php echo $operation ?>">
    <input type="text" name="b" value="<?php echo $b ?>">
    <input type="text" id="afficheur" name="afficheur" value="<?php echo $afficheur ?>" />
    <input type="submit" name="nombre" value="1"  ></input>
    <input type="submit" name="nombre" value="2"  ></input>
    <input type="submit" name="nombre" value="3"  ></input>
    <input type="submit" name="operation" value="+"  ></input>
    <input type="submit" name="operation" value="-"  ></input>
    <input type="submit" name="egale" value="="  ></input>
</form>
    
</body>
</html>