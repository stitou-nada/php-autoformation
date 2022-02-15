<?php

class personnage{

    public $vie = 80;
    public $atk = 20;
    private $num;

    public function __construct($num){
        $this->num = $num;
    }
    public function getNum(){
        return $this->num ; 
    }
}