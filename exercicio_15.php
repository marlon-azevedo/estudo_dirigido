<?php

//exercício de ler 5 números e imformar qual deles é maior//

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


if ($N5>= $N1 and $N5>= $N2 and $N5>= $N3 and $N5>= $N4){
    print "O maior Número é $N5";
}

if ($N4>= $N1 and $N4>= $N2 and $N4>=  $N3 and $N4>= $N5){
    print "O maior Número é $N4";
}

if ( $N3 >= $N1 and  $N3 >= $N2 and $N3 >= $N4 and  $N3>= $N5){
    print "O maior Número é $N3";
}

if ($N2 >= $N1 and $N2 >=  $N3 and $N2>= $N4 and $N2>= $N5){
    print "O maior Número é $N2";
}
if ($N1 >= $N2 and $N1 >=$N3 and $N1>= $N4 and $N1>= $N5){
    print "O maior Número é $N1";
}