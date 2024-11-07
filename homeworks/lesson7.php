<?php

/**
 * Task 1
 */

$employees = [
    [
        "name" => "Bill",
        "age" => 60,
        "department" => "IT",
        "salary" => 40000,
    ],
    [
        "name" => "Stieve",
        "age" => 62,
        "department" => "Programming",
        "salary" => 65000,
    ],
    [
        "name" => "Pavel",
        "age" => 40,
        "department" => "IT",
        "salary" => 55000,
    ],
];

function test(array $employees)
{
    $arr = array_column($employees, 'department');

    print_r($arr);
}

test($employees);

echo "<br><br>";

/**
 *  Task 2
 */

$cities = ["New York", "London", "Paris"];
$population = [18000000, 26000000, 20000000];
function add(array $cities, array $population)
{
    $arr = [];

    for ($i = 0; $i < count($cities); $i++) {
        $arr += [$cities[$i] => $population[$i]];
    }

    return $arr;
}

function cmp($a, $b)
{
    if ($a == $b) {
        return 0;
    }
    return ($a > $b) ? -1 : 1;
}

echo "------------------";
echo "<br><br>";

var_dump(add($cities, $population));

$test = add($cities, $population);


echo "------------------";
echo "<br><br>";

uasort($test, 'cmp');
print_r($test);

echo "<br><br>";

/**
 * Task 3
 */

$products = [
    "electronics" => [
        [
            'name' => 'phone',
            'price' => 200,
            'count' => 16,
        ],
        [
            'name' => 'notebook',
            'price' => 360,
            'count' => 7,
        ],
    ],
    "clothes" => [
        [
            'name' => 'hat',
            'price' => 10,
            'count' => 27,
        ],
        [
            'name' => 'shoes',
            'price' => 20,
            'count' => 9,
        ],
    ],
];



function getProducts($category)
{
    global $products;

    $list = $products[$category];

    uasort($list, 'cmp');
    print_r($list);

    $test = array_filter($list, function ($item) {
        return $item['count'] > 10;
    });

    echo "<br>";
    var_dump($test);
}

getProducts("electronics");

echo "<br><br>";

/**
 * Task 4
 */

$allStudents = [
    'Bill',
    'Stieve',
    'Pavel',
    'Murk',
    'Biden',
    'Musk',
];

$students = [
    'Pavel',
    'Trump',
];

function check()
{
    global $allStudents, $students;

    $arr = [];
    foreach ($allStudents as $item) {
        $count = 0;
        foreach ($students as $student) {
            if ($item !== $student) {
                $count++;
            }
            if($item === $student){
                $count = 0;
                break;
            }
        }
        if($count !== 0){
            array_push($arr, $item);
        }
    }


    return $arr;
}
echo "4444444444444444444444444<br>";
var_dump(check());
echo "<br><br>";





/**
 * Functions
 *  Task 1
 */

function faktorial(int $n)
{
    $factorial = 1;
    $i = 1;
    while ($i <= $n) {
        $factorial *= $i;
        $i++;
    }
    return $factorial;
}

echo faktorial(5);


echo "<br><br>";

/**
 *  Task 2
 */

function isPalindrome($text)
{
    $revString = strrev($text);

    if ($revString === $text) {
        return true;
    } else {
        return false;
    }
}

var_dump(isPalindrome("kazakq"));

echo "<br><br>";

/**
 *  Task 3
 */

function gcd($a, $b)
{
    return $a % $b;
}

echo gcd(54, 24);

echo "<br><br>";

/**
 *  Task 4
 */

function avarage(array $arr)
{
    return array_sum($arr) / count($arr);
}

$numbers = [1, 2, 3, 4, 5];

echo avarage($numbers);

echo "<br><br>";

/**
 *  Task 5
 */


function celsiusToFahrenheit($celsius)
{
    return  $celsius * 9 / 5 + 32;
}

echo celsiusToFahrenheit(100);

echo "<br><br>";

/**
 *  Task 6
 */

$list = [
    'a',
    'e',
    'i',
    'u',
    'o',
];

function countVowels($str)
{
    global $list;
    $count = 0;
    for ($i = 0; $i < strlen($str); $i++) {
        for ($j = 0; $j < count($list); $j++) {
            if ($str[$i] === $list[$j]) {
                $count++;
            }
        }
    }
    return $count;
}

echo countVowels("kdf");

echo "<br><br>";

/**
 *  Task 7
 */

function isPrime($number)
{
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0)
            return 0;
    }
    return 1;
}

var_dump(isPrime(43));

echo "<br><br>";

/**
 *  Task 9
 */

$numbers = [10, 2, 23, 4, 5];

function minMax($array)
{
    sort($array);
    return [
        'min' => array_shift($array),
        'max' => end($array),
    ];
}

var_dump(minMax($numbers));

echo "<br><br>";

/**
 *  Task 10
 */


function formatName($firstName, $lastName)
{
    return ucfirst(strtolower($firstName)) . " " . ucfirst(strtolower($lastName));
}

echo formatName("BEKMURZAEV", "saylaubaY");

echo "<br><br>";

/**
 *  Task 11
 */

function wordCount($string)
{
    return str_word_count($string);
}

echo wordCount("Hello world");

echo "<br><br>";

/**
 *  Task 12
 */

function hammingDistance($str1, $str2)
{
    if (strlen($str1) !== strlen($str2)) {
        return null;
    }
    $count = 0;
    for ($i = 0; $i < strlen($str1); $i++) {
        if ($str1[$i] !== $str2[$i]) {
            $count++;
        }
    }
    return $count;
}

echo hammingDistance("test", "best");

echo "<br><br>";

/**
 *  Task 13
 */

$nums = [1, 2, 2, 3, 4, 4, 4];

function uniqueCount($array)
{
    return array_unique($array);
}

var_dump(uniqueCount($nums));

echo "<br><br>";

/**
 *  Task 14
 */

function generatePassword($length)
{
    return substr(md5("dfsfsdf"), 0, $length);
}

echo generatePassword(6);

echo "<br><br>";

/**
 *  Task 15
 */

$arr = [];

function charCount($string)
{
    $newArr = [];
    global $arr;
    $count = 0;
    for ($i = 0; $i < strlen($string); $i++) {
        for ($j = 0; $j < strlen($string); $j++) {

            if ($string[$i] == $string[$j]) {
                $count++;
            }
        }
        $arr += [$string[$i] => $count];
        $count = 0;
    }
    return $arr;
}

echo "<br><br>";


var_dump(charCount("hello"));
