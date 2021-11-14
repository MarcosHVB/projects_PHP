<div class="titulo">Atribuições</div>

<?php

$title = 'Atribuições';

$numero = 10;

echo $numero;

$numero = $numero - 3;
echo '<br>'.$numero;

$numero = $numero + 1.5;
echo '<br>'.$numero;

$numero--;
--$numero;
echo '<br>'.$numero;

$numero++;
++$numero;
echo '<br>'.$numero;

$numero -=5;
$numero +=5;
$numero *=5;
$numero /=5;
$numero %=5;
$numero **=5;

$numero .=5; //concatenando o valor atual a 5, n está sendo realizada nenhuma operação

$texto = 'Essa é um texto';

echo '<br>' . $texto;
$texto .= ' qualquer'; // $texto =$texto . ' qualquer';
echo '<br>' . $texto;

//valor padrão 
$variavelInexistente = 'valor inexistente';
$valor = $variavelInexistente ?? 'valor default'; // caso a variavel não existe ele usará o "valor default"

echo '<br>' . $valor;
