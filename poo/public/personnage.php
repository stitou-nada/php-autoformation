<?php

class personnage{

    public $vie = 80;
    public $atk = 20;
    public $num;

    public function __construct($num){
        $this->num = $num;
    }
}