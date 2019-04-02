<?php

/*11. Faça um Programa que leia um número inteiro menor que 1000 e imprima a quantidade de centenas,
dezenas e unidades do mesmo, observando os termos no plural a colocação do "e", da vírgula entre
outros. Exemplo:
326 = 3 centenas, 2 dezenas e 6 unidades
12 = 1 dezena e 2 unidades*/

print "Digite um número entre 0-1000: ";
$Numero= fgets(STDIN);

$qtnumero= $Numero;

if ($qtnumero=3){

    $centena=(int)($Numero/100)%100;
    $dezena= (int)($Numero/10)%10;
    $unidade=(int)($Numero%100)%10;

    print "No número $Numero tem:\n";
    print "$centena centenas\n"; 
    print "$dezena dezenas\n" ;
    print "$unidade unidades\n ";
  

}

