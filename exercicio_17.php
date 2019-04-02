<?php

/*17. Faça um programa que peça dois números, base e expoente, calcule e mostre o primeiro número elevado
ao segundo número. Não utilize a função de potência da linguagem.*/

print "Digite o 1°Número: ";
$Base=fgets(STDIN);

print "Digite o 2°Número: ";
$Expoente=fgets(STDIN);

$potencia= pow($Base, $Expoente);

print $potencia;
