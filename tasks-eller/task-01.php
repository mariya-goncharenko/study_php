<?php
echo '<h2 class="title">Задача 1.</h2>';
echo '<p>Если выписать все натуральные числа меньше 10, кратные 3 или 5, то получим 3, 5, 6 и 9.
 Сумма этих чисел равна 23.
<br>Найдите сумму всех чисел меньше 1000, кратных 3 или 5.</p>';

$n = 10000;
$array = [];
for ($i = 1; $i < $n; $i++) {
    if ($i % 3 == 0 || $i % 5 == 0) {
        array_push($array, $i);
    };
};

echo "<p>Ответ: " . array_sum($array) . " </p>";
?>