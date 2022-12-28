<?php

$_SESSION["Name"]=$_POST['name'];
$_SESSION["Age"]=$_POST['age'];


if(isset($_POST['btn'])){
    echo  " your Name is  : ".$_SESSION['Name'] ; 
    echo  "<br>"."your age is : ". $_SESSION["Age"];
   
}


?>