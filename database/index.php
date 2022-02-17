<?php 
$connect = mysqli_connect("localhost","test","test123","demo");
$sqlquery = 'SELECT  Prenom ,Nom , Age FROM persone';
$result = mysqli_query($connect , $sqlquery);
$data = mysqli_fetch_all($result , MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>database</title>
</head>
<body>
    <?php 
     foreach ($data as $persone) {
        
     
    ?>

    <p>Prenom : <?php echo $persone["Prenom"]?></p>
    <p>Nom : <?php echo $persone["Nom"]?></p>
    <p>Age : <?php echo $persone["Age"]?></p>
<?php }?>
</body>
</html>