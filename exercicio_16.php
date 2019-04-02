<?php

//exercício de ler 5 números e imformar soma e media deles //

print "Digite o 1° número: \n";
$N1= fgets (STDIN);

print "Digite o 2° número: \n";
$N2= fgets (STDIN);

print "Digite o 3° número: \n";
$N3= fgets (STDIN);

print "Digite o 4° número: \n";
$N4= fgets (STDIN);

print "Digite o 5° número: \n";
$N5= fgets (STDIN);

$Soma=$N1+$N2+$N3+$N4+$N5;

$Media= $Soma/5;

print "A soma dos números $N1  $N2  $N3  $N4 e $N5 deu $Soma \n";

print "E a média foi de $Media";
