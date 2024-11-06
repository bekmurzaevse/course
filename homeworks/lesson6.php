<?php

/**
 * Task 1
 */

$arr = [1, 2, 3, 4, 5];

foreach ($arr as $val) {
    echo $val . "<br>";
}

echo "<br><br>";

/**
 * Task 2
 */

$days = [
    "Понедельник" => 1,
    "Вторник" => 2,
    "Среда" => 3,
    "Четверг" => 4,
    "Пятница" => 5,
    "Суббота" => 6,
    "Воскресенье" => 7,
];
echo $days["Среда"];

echo "<br><br>";

/**
 * Task 3
 */

$employees = [
    ["name" => "Alice", "age" => 30, "position" => "Manager"],
    ["name" => "Bob", "age" => 25, "position" => "Developer"],
    ["name" => "Charlie", "age" => 28, "position" => "Designer"],
];
foreach ($employees as $employee) {
    echo "{$employee['name']}, {$employee['age']}, {$employee['position']} <br>";
}

echo "<br><br>";

/**
 * Task 4
 */

$randomNumbers = [5, 3, 8, 6, 2, 9, 1, 4, 7, 0];
sort($randomNumbers);
print_r($randomNumbers);

echo "<br><br>";

/**
 * Task 5
 */

$products = [
    "Фрукты" => ["яблоко", "банан", "апельсин"],
    "Овощи" => ["картофель", "морковь", "лук"],
    "Мясо" => ["курица", "говядина", "свинина"],
];
print_r($products);


echo "<br><br>";

/**
 * Task 6
 */

$students = [
    ["name" => "Anna", "math" => 90, "english" => 85],
    ["name" => "Tom", "math" => 78, "english" => 92],
    ["name" => "Sam", "math" => 88, "english" => 84],
];
$totalMath = $totalEnglish = 0;
foreach ($students as $student) {
    $totalMath += $student["math"];
    $totalEnglish += $student["english"];
}
echo "Average Math: " . ($totalMath / count($students)) . "\n";
echo "Average English: " . ($totalEnglish / count($students)) . "\n";

echo "<br><br>";

/**
 * Task 7
 */

$fruits = ["apple", "banana", "orange"];
echo implode(", ", $fruits);

echo "<br><br>";

/**
 * Task 8
 */

$fixedArray = new SplFixedArray(5);
for ($i = 0; $i < $fixedArray->getSize(); $i++) {
    $fixedArray[$i] = rand(1, 100);
}
print_r($fixedArray);

echo "<br><br>";

/**
 * Task 9
 */

$countries = ["France" => "Paris", "Spain" => "Madrid", "Italy" => "Rome"];
function getCapital($country)
{
    global $countries;
    return $countries[$country] ?? "Неизвестная страна";
}
echo getCapital("France");

echo "<br><br>";

/**
 * Task 10
 */

$chessBoard = [
    ["R", "N", "B", "Q", "K", "B", "N", "R"],
    ["P", "P", "P", "P", "P", "P", "P", "P"],
    ["", "", "", "", "", "", "", ""],
    ["", "", "", "", "", "", "", ""],
    ["", "", "", "", "", "", "", ""],
    ["", "", "", "", "", "", "", ""],
    ["p", "p", "p", "p", "p", "p", "p", "p"],
    ["r", "n", "b", "q", "k", "b", "n", "r"],
];
foreach ($chessBoard as $row) {
    echo implode(" ", $row) . "<br>";
}

echo "<br><br>";

/**
 * Task 11
 */

$scores = ["Alice" => 90, "Bob" => 85, "Charlie" => 95];
$highestScore = max($scores);
$topStudent = array_search($highestScore, $scores);
echo "Top Student: $topStudent with $highestScore points.";

echo "<br><br>";

/**
 * Task 12
 */

$names = ["Anna", "Tom", "Sam", "Alice"];
sort($names);
print_r($names);

echo "<br><br>";

/**
 * Task 13
 */

$vacations = [
    "Alice" => ["2024-07-01", "2024-12-15"],
    "Bob" => ["2024-08-10", "2024-11-01"],
];
print_r($vacations);

echo "<br><br>";

/**
 * Task 14
 */

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$evenNumbers = array_filter($numbers, fn($num) => $num % 2 === 0);
print_r($evenNumbers);


echo "<br><br>";

/**
 * Task 15
 */

$months = ["January" => 31, "February" => 28, "March" => 31];
echo "Days in February: " . $months["February"];

echo "<br><br>";

/**
 * Task 16
 */

$schedule = [
    "Понедельник" => ["9:00" => "Математика", "11:00" => "Физика"],
    "Вторник" => ["10:00" => "Химия", "13:00" => "История"],
];
print_r($schedule["Понедельник"]);

echo "<br><br>";

/**
 * Task 17
 */

$nums = [1, 2, 3, 4, 5];
echo "Sum: " . array_sum($nums);

echo "<br><br>";

/**
 * Task 18
 */

$books = [
    ["title" => "Book A", "author" => "Author A", "year" => 1999],
    ["title" => "Book B", "author" => "Author B", "year" => 2005],
    ["title" => "Book C", "author" => "Author C", "year" => 2015],
];
function findBooksAfter($year)
{
    global $books;
    return array_filter($books, fn($book) => $book["year"] > $year);
}
print_r(findBooksAfter(2000));

echo "<br><br>";

/**
 * Task 19
 */

$teams = [
    ["team" => "Team A", "country" => "Country A", "players" => ["Alice", "Bob"]],
    ["team" => "Team B", "country" => "Country B", "players" => ["Charlie", "David"]],
];
foreach ($teams as $team) {
    echo "{$team['team']} ({$team['country']}): " . implode(", ", $team["players"]) . "\n";
}

echo "<br><br>";

/**
 * Task 20
 */

$values = [1, 2, 2, 3, 4, 4, 5];
$uniqueValues = array_unique($values);
print_r($uniqueValues);
