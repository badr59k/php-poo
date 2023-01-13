<?php

require __DIR__.'/vendor/autoload.php';

$objet = new stdClass();
$objet->foo=123;
$objet->fruits = ['ananas', 'banane', 'cerise'];
dump($objet);

$tableau =[];
$tableau['foo'] =123;
$tableau['fruits'] =['ananas', 'banane', 'cerise']; 
dump($tableau);