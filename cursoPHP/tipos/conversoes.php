<div class="titulo">Conversões</div>

<?php

echo is_int(5);

// INT PARA FLOAT
# se somar um ao valor máximo dos números inteiros, ele passa a ser um float, por mais que n possua casas decimais

echo '<br>';

var_dump(1 + 1.0);

echo '<br>';

// casting = conversão explicíta
var_dump((float)3);

//float para int
echo '<p>Float para Int</p>';
var_dump((int)6.8);
echo '<br>';
var_dump(intval(2.8, 10)); // intval passa o valor e a base desejada
echo '<br>';
var_dump(intval(2.99)); // base 10 é a base padrão, n é obrigatória
echo '<br>';
var_dump(intval("1110000111", 2)); // intval passa o valor e a base desejada
echo '<br>';
var_dump((int) round(2.8)); // arredonda, e dps converte para int

//operações com string

echo "<p>Strings </p>";
var_dump(3 + "2"); #resultado 5, pois o php sabe q n é um contatenação
echo '<br>';
var_dump("3" + 2);
echo '<br>';
var_dump("3" . 2);
echo "<br>", is_string("3" . 2); // string pois usou contatenação "."
echo "<br>", is_string("3" + 2);

var_dump(1 + 'cinco');// simplesmente ignora a parte q n consegue fazer uma operação, no caso o 'cinco'
var_dump(1 + '5 cinco'); //php consegue identificar a parte inicial de "5 cinco" e irá fazer a operação com essa informação
echo '<br>';
var_dump(1 + 'cinco 5'); // se o "5" for colocado após, n será possível fazer a soma, tudo será ignorado
echo '<br>';
var_dump(1 + "2+5"); // só procura até onde tem número, ou seja, para no "+"
echo '<br>';
var_dump(1 + '3.2');#float
echo '<br>';
var_dump(1 + "-3.2e2");
echo '<br>';
var_dump((int) "10.5"); // 10
echo '<br>';
var_dump((float) "10.5"); // 10.5

