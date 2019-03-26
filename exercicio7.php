<?php

    //7. Faça um algoritmo que leia três números e mostre o maior e o menor deles. 

    print "Digite um número: ";
    $numero1 = (int) fgets (STDIN);

    print "Digite um número: ";
    $numero2 = (int) fgets (STDIN);

    print "Digite um número: ";
    $numero3 = (int) fgets (STDIN);

    //Maior

        if (($numero1<$numero2) and ($numero2>$numero3)){
            print "Número maior: $numero2 \n";
        }
        elseif (($numero1 > $numero2) and ($numero1>$numero3)){
            print "Número maior: $numero1 \n";
         }
        else{
            print "Número maior: $numero3 \n";
        }
    
    //Menor

        if (($numero1<$numero2) and ($numero1<$numero3)){
            print "Número menor: $numero1 \n";
        }
        elseif (($numero2 < $numero1) and ($numero2<$numero3)){
            print "Número menor: $numero2 \n";
        }
        else{
            print "Número menor: $numero3 \n";
        }