<?php
echo '<h2 class="title">Задача 3.</h2>';
echo '<p>Простые делители числа 13195 - это 5, 7, 13 и 29.
Каков самый большой делитель числа 600851475143, являющийся простым числом?</p>';

$n = 600851475143;

function task3($n)
{
    $i = 2;
    while ($i * $i < $n) {
        while ($n % $i == 0) {
            $n = $n / $i;
        }
        $i = $i + 1;
    }
return  $n;
}
$res3 = task3(600851475143);
echo "<p>Ответ: ". $res3 ." </p>";
?>