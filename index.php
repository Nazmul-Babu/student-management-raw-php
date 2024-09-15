<?php 
require 'Animal.php';
require 'Cat.php';
require 'Dog.php';
require 'AnimalShelter.php';
$cat = new Cat();
$dog = new Dog();
$animals = [$cat,$dog];
foreach($animals as $animal){
    $animal->makeSound();
}
$shelter = new AnimalShelter($cat);
$shelter->adopt();