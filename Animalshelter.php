<?php
class Animalshelter{
    protected $animal;
    public function __construct(Animal $animal){
       $this->animal = $animal; 
       var_dump($animal);
    }
    public function  adopt(){
        $this->animal->makeSound();
    } 
}