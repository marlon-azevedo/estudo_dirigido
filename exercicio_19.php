<?php


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