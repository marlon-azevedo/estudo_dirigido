<?php

/*5. Faça um algoritmo para a leitura de duas notas parciais de um aluno. O programa deve calcular a média
alcançada por aluno e apresentar:
A mensagem "Aprovado", se a média alcançada for maior ou igual a sete;
A mensagem "Reprovado", se a média for menor do que sete;
A mensagem "Aprovado com Distinção", se a média for igual a dez. */

print "Digite a primeira nota: ";
$primeira_nota = fgets (STDIN);

print "Digite a segunda nota: ";
$segunda_nota = fgets (STDIN);

$media = ($primeira_nota+$segunda_nota)/2;

    print "N1 | $primeira_nota";
    print "N2 | $segunda_nota\n";
    print "Média | $media \n\n";

if ($media == 10){
    print "---Aprovado com Distinção--- \n\n";
}
elseif ($media >= 7){
    print "---Aprovado--- \n\n";
}
else{
    print "---Reprovado--- \n\n";
}




