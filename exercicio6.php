<?php

    //6. Faça um algoritmo que leia três números e mostre o maior deles. 

    print "Digite um número: ";
    $numero1 = (int) fgets (STDIN);

    print "Digite um número: ";
    $numero2 = (int) fgets (STDIN);

    print "Digite um número: ";
    $numero3 = (int) fgets (STDIN);

        if (($numero1<$numero2) and ($numero2>$numero3)){
           print "Número maior: $numero2 \n";
        }
        elseif (($numero1 > $numero2) and ($numero1>$numero3)){
            print "Número maior: $numero1 \n";
        }
        else{
            print "Número maior: $numero3 \n";
        }