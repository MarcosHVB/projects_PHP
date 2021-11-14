<div class="titulo">Tipo Booleano</div>

<?php

echo TRUE; // convertido para 1 no browser
echo '<br>';
echo true; // n é case sensitive
echo '<br>';
echo FALSE; // não é convetido para nada, logo n aparece no browser
echo '<br>';
echo false;
echo '<br>';

echo var_dump(true);
echo '<br>';
echo var_dump('false'); // string(5)
echo '<br>';
echo is_bool(false);
echo '<br>' . is_bool('true'); // mostra se um valor é booleano

//fazer as regras de conversões
echo '<p>Regras:</p>';
echo '<br>' . var_dump((bool) 0); // convertendo para booleano, no caso 0 representa false
                                  // dos números inteiros apenas o 0 é convertindo para false

echo '<br>' . var_dump((bool) 20);

echo '<br>' . var_dump((bool) -5);
echo '<br>' . var_dump((bool) 0.0);
echo '<br>' . var_dump((bool) 0.000000001); // qualquer número diferente de zero sera true
echo '<br>' . var_dump((bool) ""); // false
echo '<br>' . var_dump((bool) "0"); // false 
echo '<br>' . var_dump((bool) " "); // verdadeira, por mais que tenha somente 1 caractere e esteje vazio
echo '<br>' . var_dump((bool) "00"); //true, todo o resto é true

echo '<br>' . var_dump(!!"false"); // n é preciso fazer conversão usando o sinal de negação lógico
