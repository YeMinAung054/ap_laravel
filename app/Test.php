<?php

namespace App;

class Test
{
    /*public function smth(){
        return 'here is smth';
    }*/

    protected $name;

    public function __construct($name){
        return $this->name = $name;
    }

    public function execute(){
        return $this->name;
    }
}