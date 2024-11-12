<?php

/**
 * Task 1
 */


$file = fopen("tekst.txt", "w");
fwrite($file, "Hello world");
fclose($file);

$file = fopen("tekst.txt", "r");

while (! feof($file)) {
    $line = fgets($file);
    echo $line . "<br>";
}


/**
 * Task 2
 */

$filename = 'example.txt';
$directory = 'papka';

if (is_dir($directory) && file_exists("$directory/$filename")) {
    echo "Papka bar";
    file_put_contents("$directory/$filename", "Taza qatar qosiw");
} else {
    mkdir($directory);
    $myfile = fopen("$directory/$filename", "w");
}


/**
 * Task 3
 */

$arr = file("papka/example.txt");
echo count($arr);

/**
 * Task 4
 */

$filename = 'file.html';
$htmlContent = "<h1>Tema</h1> <br> <p>This is a paragraph with.</p>";

file_put_contents($filename, $htmlContent);

$size = filesize($filename);

echo "Size of '$filename': $size bytes.";

/**
 * Task 5
 */

$path = "papka/text.txt";
file_put_contents($path, "line 1\nline 2\nline 3");

/**
 * Task 6
 */

$filename = 'papka/text.txt';
$copy = 'papka/text_copy.txt';

if (file_exists($filename)) {
    copy($filename, $copy);
    echo "File copied to '$copy'.";
} else {
    echo "File '$filename' does not exist.";
}


/**
 * Task 8
 */

$directory = 'papka';
$file = 'text.txt';

if (is_dir($directory) && file_exists("$directory/$file")) {
    unlink("$directory/$file");
    rmdir($directory);
    echo "papka ha'm fayl o'shirildi!";
} else {
    echo "papka ha'm fayl tabiladi!";
}

/**
 * Task 9
 */

$list = ["Asus", "Acer", "Lenovo"];
$file = "example.text";
foreach ($list as $text) {
    file_put_contents($file, $text . " ", FILE_APPEND);
}

$files = file_get_contents($file);

$words = explode(' ', $files);

foreach ($words as $word) {
    echo strrev($word) . " ";
}

/**
 * Task 10
 */

$directory = 'papka';
$directory2 = 'papka2';
$file = 'text.txt';
$file2 = 'text2.txt';

if (is_dir($directory) && file_exists("$directory/$file")) {
    rename("$directory/$file", "$directory2/$file2");
    echo "papka ati o'zgertirildi!";
} else {
    echo "papka ha'm fayl tabiladi!";
}
