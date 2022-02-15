<?php 
require 'personnage.php';

$merline = new personnage ();
$merline -> crier() ; 
$merline -> num = "nada";

$haryy = new personnage ();

$haryy -> num = "stitou";
var_dump($merline  ) ; 
var_dump($haryy );