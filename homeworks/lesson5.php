<?php

/**
 * Task 1
 */

$a = 6;

echo $a % 2 == 0 ? "JUP" : "TAQ";

echo "<br>";
echo "<br>";

/**
 * Task 2
 */

$age = 15;

echo $age >= 18 ? "Совершеннолетний" : "Несовершеннолетний";

echo "<br>";
echo "<br>";

/**
 * Task 3
 */

$text = "Saylaubay123";

echo strlen($text) <= 10 ? "Короткая" : "Длинная";

echo "<br>";
echo "<br>";

/**
 * Task 4
 */

$day = "18";

echo ($day >= 6 && $day <= 18) ? "Днем" : "Ночью";

echo "<br>";
echo "<br>";

/**
 * Task 5
 */

$password = "password";
$newPassword = "password";

echo $password === $newPassword ? "Доступ разрешен" : "Неверный пароль";

echo "<br>";
echo "<br>";

/**
 * Loop
 * 
 * Task 1
 */

$sum = 0;
for ($i = 1; $i <= 100; $i++) {
    $sum += $i;
}
echo $sum;

echo "<br>";
echo "<br>";

/**
 * Task 2
 */

for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= 10; $j++) {
        echo "$i * $j = " . $j * $i;
        echo $j !== 10 ? "<br>" : "<br><br>";
    }
}

echo "<br>";
echo "<br>";

/**
 * Task 3
 */

$nums = [5, 6, 3, 7, 9, 10, 4];

$min = PHP_INT_MAX;
foreach ($nums as $num) {
    $min = $num < $min ? $num : $min;
}
echo $min;

echo "<br>";
echo "<br>";

/**
 * Task 4
 */

$number = 5;
$factorial = 1;
$i = 1;
while ($i <= $number) {
    $factorial *= $i;
    $i++;
}
echo "Факториал числа $number: $factorial";

echo "<br>";
echo "<br>";

/**
 * Task 5
 */

$sum = 0;
for ($i = 1; $i <= 50; $i++) {
    if ($i % 2 == 0) {
        $sum += $i;
    }
}
echo $sum;

echo "<br>";
echo "<br>";

/**
 * Task 6
 */

$i = 10;
do {
    echo "$i <br>";
    $i--;
} while ($i >= 1);

echo "<br>";
echo "<br>";

/**
 * Task 7
 */

$nums = [4, -2, 6, -8, 9, -10, 16];

$index = null;
$var = null;

foreach ($nums as $key => $val) {
    if ($val < 0) {
        $index = $key;
        $var = $val;
        break;
    }
}
echo "Massivte birinshi teris sannin' indeksi $index ma'nisi $var";

echo "<br>";
echo "<br>";

/**
 * Task 8
 */

for ($i = 1; $i <= 20; $i += 2) {
    echo $i . "\t\t";
}

echo "<br>";
echo "<br>";

/**
 * Task 9
 */

$text = "Google";

for ($i = 0; $i < strlen($text); $i++) {
    echo $text[$i] . "\t\t\t\t";
}

echo "<br>";
echo "<br>";

/**
 * Task 10
 */

$nums = [4, -2, 6, -8, 9, -10, 16];

$numPlus = 0;
$numMinus = 0;

foreach ($nums as $num) {
    if ($num < 0) {
        $numMinus++;
    } else {
        $numPlus++;
    }
}

echo "Massivte on' ma'nisler sani = $numPlus <br>";
echo "Massivte teris ma'nisler sani = $numMinus <br>";

echo "<br>";
echo "<br>";

/**
 * Task 11
 */

$i = 1;

while ($i <= 10) {
    if ($i % 2 == 0) {
        echo $i . "<br>";
    }
    $i++;
}

echo "<br>";
echo "<br>";

/**
 * Task 12
 */

$number = 6;
$isPrime = true;
for ($i = 2; $i <= sqrt($number); $i++) {
    if ($number % $i == 0) {
        $isPrime = false;
        break;
    }
}
echo $isPrime ? "$number простое" : "$number составное";

echo "<br>";
echo "<br>";

/**
 * Task 13
 */

$a = 0;
$b = 1;
for ($i = 0; $i < 10; $i++) {
    echo $a . "<br>";
    $temp = $a + $b;
    $a = $b;
    $b = $temp;
}

echo "<br>";
echo "<br>";

/**
 * Task 14
 */

$max = 12;
$sum = 0;
$i = 1;
do {
    $sum += $i;
    echo "Сумма чисел до $i: $sum <br>";
    $i++;
} while ($i <= $max);

echo "<br>";
echo "<br>";

/**
 * Task 15
 */

$numbers = [1, 2, 3, 4, 5];
foreach ($numbers as &$num) {
    $num = ($num % 2 == 0) ? $num * 2 : $num - 1;
}
print_r($numbers);


/**
 * Increment and Decrement
 * Task 1
 */

$count = 0;
$i = 1;
while ($i <= 10) {
    $count++;
    $i++;
}
echo "Количество итераций: $count";

echo "<br>";
echo "<br>";

/**
 * Task 2
 */

for ($i = 0; $i <= 20; $i += 2) {
    echo $i . "<br>";
}

echo "<br>";
echo "<br>";

/**
 * Task 3
 */

$i = 10;
while ($i >= 0) {
    echo $i . "<br>";
    $i--;
}

echo "<br>";
echo "<br>";

/**
 * Task 4
 */

$value = 2;
$target = 20;
while ($value < $target) {
    $value *= 2;
}
echo "Итоговое значение: $value";

echo "<br>";
echo "<br>";

/**
 * Task 5
 */

for ($i = 20; $i >= 0; $i -= 2) {
    echo $i . "<br>";
}
