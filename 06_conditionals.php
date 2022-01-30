<?php

$age = 20;
$salary = 300000;

// Sample if
if ($age === 20) {
    echo "1";
}

// Without circle braces
if ($age === 20) echo "1";

// Sample if-else
if ($age > 20) {
    echo "1";
} else {
    echo "2";
}
echo '<br>';

// Difference between == and ===
$age == 20; // true
$age == '20'; // true

$age === 20; // true
$age === '20'; // false 

// if AND
if ($age > 20 && $salary === 300000) {
    echo "Do Something";
}

// if OR
if ($age > 20 || $salary === 300000) {
    echo "Do Something different";
}
echo '<br>';

// Ternary if
echo $age < 22 ? 'Young' : 'Old';
echo '<br>';

// Short ternary
$myAge = $age ?: 18;
var_dump($myAge);
echo '<br>';

// Null coalescing 
$myName = isset($name) ? $name : 'John';
$myName = $name ?? 'John'; // shorthand property

// switch
$userRole = 'admin'; // editor, user, admin
switch ($userRole) {
    case 'admin':
        echo 'admin';
        break;
    case 'editor':
        echo 'editor';
        break;
    case 'user':
        echo 'user';
        break;
    default:
        echo 'Invalid Role';
}
