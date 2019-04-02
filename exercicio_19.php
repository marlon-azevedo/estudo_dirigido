<?php

/*19. A série de Fibonacci é formada pela sequência 0,1,1,2,3,5,8,13,21,34,55, [...] Faça um programa que
gere a série até que o valor seja maior que 500.*/

print "Deseja Fibonacciar até quanto? ";
$fibonacciar= (float) fgets(STDIN);
print "(O valor *provavelmente* vai ultrapassar o digitado)\n";
sleep (1);


$fibonacci=0;
$fibonaccinovo=1;

print "$fibonacci $fibonaccinovo ";


while ($fibonaccimaisnovoainda<$fibonacciar)
    {$fibonaccimaisnovoainda=$fibonacci+$fibonaccinovo;
     print "$fibonaccimaisnovoainda ";
     $fibonacci= $fibonaccinovo;
     $fibonaccinovo= $fibonaccimaisnovoainda;}
