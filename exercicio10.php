<?php

    /*10. Faça um algoritmo que calcule as raízes de uma equação do segundo grau, na forma ax2 + bx + c. O
    programa deverá pedir os valores de a, b e c e fazer as consistências, informando ao usuário nas
    seguintes situações:
    Se o usuário informar o valor de A igual a zero, a equação não é do segundo grau e o programa não deve
    pedir os demais valores, sendo encerrado;
    Se o delta calculado for negativo, a equação não possui raizes reais. Informe ao usuário e encerre o
    programa;
    Se o delta calculado for igual a zero a equação possui apenas uma raiz real; informe-a ao usuário;
    Se o delta for positivo, a equação possui duas raízes reais; informe-as ao usuário;*/

    //b2-4*a*c
    // x=(-b+-

        print "Valor de A = ";
        $a = (int) fgets (STDIN);
        
        while ($a == '0'){
            print "\n\nEquação não é de segundo grau! \n";
            print "---Operação Encerrada---\n\n";

            print "Valor de A = ";
            $a = (int) fgets (STDIN);
        }
            
            print "Valor de B = ";
            $b = (int) fgets (STDIN);

            print "Valor de C = ";
            $c = (int) fgets (STDIN);




            $delta = pow($b,2)-4*$a*$c;
            
            if ($delta < '0'){

                print "\n\nEquação não possui raizes reais! \n";
                print "Delta = $delta \n";
                print "---Operação Encerrada---\n\n";

                
            }
            
            if ($delta == '0'){

                $x1 = (int)(-$b+sqrt($delta))/2*$a;
                $x2 = (int)(-$b-sqrt($delta))/2*$a;

                print "\n\nDelta = $delta \n";
                print "X = $x1 \n";
                print "---Operação Encerrada---\n\n";

            

            }
            if ($delta > 0){

                $x1 = (int)(-$b+sqrt($delta))/2*$a;
                $x2 = (int)(-$b-sqrt($delta))/2*$a;
                
                print "Delta = $delta \n";
                print "X1 = $x1 \n";
                print "X2 = $x2 \n";
                print "---Operação Encerrada---\n\n";

            }



        

