<?php

//1. Faça um algoritmo que peça dois números e imprima o maior deles. 

print "Digite um número: ";
$numero1 = (int) fgets (STDIN);

print "Digite um número: ";
$numero2 = (int) fgets (STDIN);

if ($numero1 < $numero2){
    print "Número maior: $numero2 \n";
}
if ($numero1 > $numero2){
    print "Número maior: $numero1 \n";
}