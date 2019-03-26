<?php

    //9. Faça um algoritmo que leia três números e mostre-os em ordem decrescente.

    print "Digite um número: ";
    $numero1 = (int) fgets (STDIN);

    print "Digite um número: ";
    $numero2 = (int) fgets (STDIN);

    print "Digite um número: ";
    $numero3 = (int) fgets (STDIN);

    if (($numero1<$numero2) and ($numero2>$numero3)){
        print "$numero2 \n";
    }
    elseif (($numero1 > $numero2) and ($numero1>$numero3)){
        print "$numero1 \n";
     }
    else{
        print "$numero3 \n";
    }

    if ((($numero1<$numero2) and ($numero1>$numero3)) or (($numero1>$numero2) and ($numero1<$numero3))){
        print "$numero1 \n";
    }
    elseif ((($numero2 > $numero1) and ($numero2<$numero3))or(($numero2 < $numero1) and ($numero2>$numero3))){
        print "$numero2 \n";
     }
    else{
        print "$numero3 \n";
    }

    if (($numero1<$numero2) and ($numero1<$numero3)){
        print "$numero1 \n";
    }
    elseif (($numero2 < $numero1) and ($numero2<$numero3)){
        print "$numero2 \n";
    }
    else{
        print "$numero3 \n";
    }