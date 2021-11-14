<div class="titulo">Variáveis</div>

<?php

    $numeroA = 13;
    echo $numeroA, '<br>';
    var_dump($numeroA);
    
    echo '<br>';

    $a = 3;
    $b = 16;
    $soma = $a + $b;
    echo $soma; //variaveis são case-sensitive
    echo'<br>';

    echo isset($soma);
    echo '<br>';
    unset($soma);
    echo isset($soma);
    var_dump($soma);
    
    $variavel = 10;
    echo '<br>', $variavel;
    $variavel = "agora sou uma string";
    echo '<br>', $variavel;
    #tipo da variável não é setado

    //Nome de variável
    $var = 'válida';
    $var2 = 'válida';
    $VAR3 = 'válida';
    $_var_4 = 'válida';
    $vâr5 = 'válida'; // não recomendado
    // $6var = 'inválida'
    // $%var7 = 'inválida'
    // $var8% = 'inválida'
    // caractere especiais não funcionam 

    //variáveis pre-definidas
    echo '<br>';
    var_dump($_SERVER["HTTP_HOST"]); 