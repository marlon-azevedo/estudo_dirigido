<?php

//Quantidade de pares e impares em 10 números

$numeropar=0;
$numeroimpar=0;
$contagemvezes=1;

do {print "Digite um número: ";
    $num = (float) fgets(STDIN);
    
    if ($num%2==0)
    {$numeropar++;}
    if ($num%2!=0)
    {$numeroimpar++;}  
    $contagemvezes++;}  while($contagemvezes<=10);

    
print "Quantidade de número(s) impar(es): $numeroimpar\nQuantidade de número(s) par(es): $numeropar";
