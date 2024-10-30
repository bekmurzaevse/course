<?php

/**
 * Task 1
 */

$age = 30;

if ($age < 18) {
    echo "Доступ запрещен";
} elseif ($age <= 65) {
    echo "Доступ разрешен";
} else {
    echo "Пользователь пожилой";
}

echo "<br>";
echo "<br>";

/**
 * Task 2
 */

$score = 78;

if ($score < 50) {
    echo "Неудовлетворительно";
} elseif ($score <= 69) {
    echo "Удовлетворительно";
} elseif ($score <= 89) {
    echo "Хорошо";
} else {
    echo "Отлично";
}

echo "<br>";
echo "<br>";

/**
 * Task 3
 */

$number = 15;

if ($number % 2 == 0) {
    echo "Четное число";
} else {
    echo "Нечетное число";
}

echo "<br>";
echo "<br>";

/**
 * Task 4
 */

$dayNumber = 3;

switch ($dayNumber) {
    case 1:
        echo "Понедельник";
        break;
    case 2:
        echo "Вторник";
        break;
    case 3:
        echo "Среда";
        break;
    case 4:
        echo "Четверг";
        break;
    case 5:
        echo "Пятница";
        break;
    case 6:
        echo "Суббота";
        break;
    case 7:
        echo "Воскресенье";
        break;
    default:
        echo "Некорректное значение";
}

echo "<br>";
echo "<br>";

/**
 * Task 5
 */

$number = 15;

if ($number >= 10 && $number <= 20) {
    echo "Число в диапазоне";
} else {
    echo "Число вне диапазона";
}

echo "<br>";
echo "<br>";

/**
 * Task 6
 */

$password = "mypassword123";

if (strlen($password) > 8 && preg_match('/\d/', $password)) {
    echo "Пароль принят";
} else {
    echo "Пароль не соответствует требованиям";
}

echo "<br>";
echo "<br>";

/**
 * Task 7
 */

$a = 5;
$b = 10;

if ($a > $b) {
    echo "Первое число больше";
} elseif ($a < $b) {
    echo "Второе число больше";
} else {
    echo "Числа равны";
}

echo "<br>";
echo "<br>";

/**
 * Task 8
 */

$month = 5;

if ($month >= 1 && $month <= 3) {
    echo "Зима";
} elseif ($month >= 4 && $month <= 6) {
    echo "Весна";
} elseif ($month >= 7 && $month <= 9) {
    echo "Лето";
} elseif ($month >= 10 && $month <= 12) {
    echo "Осень";
} else {
    echo "Некорректный номер месяца";
}

echo "<br>";
echo "<br>";

/**
 * Task 9
 */

$str1 = "Hello";
$str2 = "hello";

if ($str1 == $str2) {
    echo "Строки идентичны";
} else {
    echo "Строки различаются";
}

echo "<br>";
echo "<br>";

/**
 * Task 10
 */

$login = "admin";
$password = "1234";

if ($login == "admin" && $password == "1234") {
    echo "Авторизация успешна";
} else {
    echo "Неверный логин или пароль";
}

echo "<br>";
echo "<br>";

/**
 * Task 11
 */

$year = 2024;

if (($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0) {
    echo "Год високосный";
} else {
    echo "Год не високосный";
}

echo "<br>";
echo "<br>";

/**
 * Task 12
 */

$a = 10;
$b = 5;
$operation = '+';

switch ($operation) {
    case '+':
        echo $a + $b;
        break;
    case '-':
        echo $a - $b;
        break;
    case '*':
        echo $a * $b;
        break;
    case '/':
        echo $b != 0 ? $a / $b : "Ошибка деления на ноль";
        break;
    default:
        echo "Некорректная операция";
}

echo "<br>";
echo "<br>";

/**
 * Task 13
 */

$age = 20;
$dayOfWeek = 3;

if ($age > 18 && $dayOfWeek >= 1 && $dayOfWeek <= 5) {
    echo "Рабочий день";
} else {
    echo "Выходной";
}

echo "<br>";
echo "<br>";

/**
 * Task 14
 */

$a = 5;
$b = 10;
$c = 3;

$min = $a;
if ($b < $min) $min = $b;
if ($c < $min) $min = $c;

echo "Минимальное число: $min";

echo "<br>";
echo "<br>";

/**
 * Task 15
 */

$x = -3;
$y = 4;

if ($x > 0 && $y > 0) {
    echo "первая четврть";
} else if ($x < 0 && $y > 0) {
    echo "вторая четврть";
} else if ($x < 0 && $y <= 0) {
    echo "третья четврть";
} else if ($x > 0 && $y < 0) {
    echo "четвертая четврть";
}
