<div class="titulo">Valor vs Referência</div>

<?php

    $variavel = 'valor inicial';
    echo $variavel;

    //atribuição por valor
    $variavelValor = $variavel;
    echo "<br>$variavelValor ";
    $variavelValor = 'novo valor';
    echo $variavelValor;
    echo "<br> $variavel";

    //atribuição por valor
    $variavelReferencia = &$variavel; // & referencia, apontam para o msm local

    $variavelReferencia = 'mesma referência';
    echo "<br>$variavel , $variavelReferencia";