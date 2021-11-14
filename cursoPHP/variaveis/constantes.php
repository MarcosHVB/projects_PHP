<div class="titulo">Constantes</div>

<?php

    define('TAXA_DE_JUROS', 5.9); //constantes, todas as letras maisculas separadas por underline, aspas simples ou duplas
    echo TAXA_DE_JUROS;

    // TAXA_DE_JUROS = 2.5;

    const NOVA_TAXA = 2.5;
    echo "<br>". NOVA_TAXA;

    $valorVariavel = 2.8;
    // define('NOVISSIMA_TAXA', $valorVariavel); //DESSA FORMA É POSSÍVEL SETA O VALOR DA CONSTANTE COM UMA VARIÁVEL
    // const NOVISSIMA_TAXA = $valorVariavel;
    const NOVISSIMA_TAXA = 2.8 + 1.2; #NÃO TEM COMO SETAR O VALOR DA CONSTANTE COM OUTRAS VARIAVEIS DESSA FORMA 
    echo '<br>' . NOVISSIMA_TAXA;

    echo '<br>' . PHP_VERSION;
    echo '<br>' . PHP_INT_MAX;

    echo '<br> Linha: ' . __LINE__;
    
    echo '<br>' . __FILE__;

    echo '<br>' . __DIR__;


