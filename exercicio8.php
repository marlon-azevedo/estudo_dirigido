<?php

    //8. Faça um programa que pergunte o preço de três produtos e informe qual produto você deve comprar,
    //sabendo que a decisão é sempre pelo mais barato

    
    print "Produto 1 - R$";
    $produto1 = fgets (STDIN);

    print "Produto 2 - R$";
    $produto2 = fgets (STDIN);

    print "Produto 3 - R$";
    $produto3 = fgets (STDIN);

    if (($produto1<$produto2) and ($produto1<$produto3)){
        print "O produto com menor preço é o Produto 1 | R$$produto1 \n";
    }
    elseif (($produto2 < $produto1) and ($produto2<$produto3)){
        print "O produto com menor preço é o Produto 2 | R$$produto2 \n";
    }
    else{
        print "O produto com menor preço é o Produto 3 | R$$produto3 \n";
    }