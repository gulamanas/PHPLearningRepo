<?php


// What is class and instance
require_once 'Person.php';

$p = new Person("Gulam", 'Anas');
$p->setAge(23);
echo '<pre>';
var_dump($p);
echo '</pre>';
echo $p->getAge();

$p2 = new Person('John', 'Smith');
echo '<pre>';
var_dump($p2);
echo '</pre>';
echo Person::$counter;

// Create Person class in Person.php

// Create instance of Person

// Using setter and getter