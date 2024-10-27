<?php

/**
 * Task1
 */

$name = "Saylaubay";
$age = 29;
$country = "Karakalpaktan";

echo "Меня зовут $name, мне $age лет, я живу в $country.";

echo '<br>';
echo '<br>';

/**
 * Task 2
 */

$productName = "Кофе";
$quantity = 10;
$price = 5.99;
$inStock = true;

echo gettype($productName) . "<br>"; 
echo gettype($quantity) . "<br>";    
echo gettype($price) . "<br>";
echo gettype($inStock) . "<br>"; 

echo '<br>';
echo '<br>';

/**
 * Task 3
 */

$intVal = 10;
$floatVal = 2.5;

echo "Сложение: " . ($intVal + $floatVal) . "<br>";
echo "Вычитание: " . ($intVal - $floatVal) . "<br>";
echo "Умножение: " . ($intVal * $floatVal) . "<br>";
echo "Деление: " . ($intVal / $floatVal) . "<br>";

echo '<br>';
echo '<br>';

/**
 * Task 4
 */

$str = "123.45";
$floatVal = (float) $str;
$intVal = (int) $str;

echo "Число с плавающей точкой: $floatVal <br>";
echo "Целое число: $intVal <br>";

echo '<br>';
echo '<br>';

/**
 * Task 5
 */

$var = 100;

if (is_int($var)) {
    echo "$var — это целое число.<br>";
} elseif (is_string($var)) {
    echo "$var — это строка.<br>";
} elseif (is_bool($var)) {
    echo "$var — это булевское значение.<br>";
}