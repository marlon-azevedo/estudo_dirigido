<?php

    //2. Faça um algoritmo que peça um valor e mostre na tela se o valor é positivo ou negativo. 

    print "Digite um número: ";
    $numero = fgets (STDIN);

    if ($numero < 0){
        print "Número negativo \n";
    }
    else{
        print "Número positivo \n";
    }
    
