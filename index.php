<?php

echo "Введите первое число:  \n";
$numberA=trim(fgets(STDIN));
echo "Введите второе число: \n";
$numberB=trim(fgets(STDIN));

if (!is_numeric($numberA) or !is_numeric($numberB)) {
    $error = 'Одно из введенных значений не является числом';
} else if ($numberB === '0') {
    $error = 'Второе число равно нулю, на ноль делить нельзя';
} 

if (isset($error)) {
    fwrite(STDERR, $error . PHP_EOL);
} else {
    fwrite(STDOUT,"Результат деления: " . $numberA / $numberB . PHP_EOL);
}




