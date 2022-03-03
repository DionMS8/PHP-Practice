//=====[PHP FILE SYSTEM]=================================================================================

//===[INCLUDING A FILE]=================================================================================

<?php include "FILE_PATH"; ?>
<?php include_once "FILE_PATH"; ?>

<?php require "FILE_PATH"; ?>
<?php require_once "FILE_PATH"; ?>

- include_once => MOST IDEAL FOR INCLUDING FILES THAT MAY CONTAIN HTML MARKUP FOR PAGE COMPONENTS SUCH AS NAVBARS AND FOOTERS

- require_once => MOST IDEAL FOR INCLUDING FILES FOR THE PURPOSE OF ACCESSING FUNCTIONS OR VARIABLES THAT ARE DECLARED WITHIN THEM


//===[FILESYSTEM FUNCTIONS]================================================================================

SOME COMMON EXAMPLES:

- copy() => COPIES A FILE
- file() => READS A FILE INTO AN ARRAY
- fopen() => OPENS A FILE OR URL
- fclose() => CLOSES A FILE

- THERE ARE MANY FILESYSTEM FUNCTIONS

https://www.w3schools.com/pHp/php_ref_filesystem.asp
https://www.php.net/manual/en/book.filesystem.php


===[WORKING WITH THE FILE SYSTEM]========================================================================

<?php

//===[MAGIC CONSTANTS]====================================================================================

// PRINTING THE CURRENT FILE
echo __FILE__ . '<br>';

// PRINTING THE CURRENT DIRECTORY
echo __DIR__ . '<br>';

// PRINTING THE LINE NUMBER FOR THIS CODE 
echo __LINE__ . '<br>';

//===[DIRECTORIES]========================================================================================

// CREATING A DIRECTORY
mkdir("test");

// RENAMING A DIRECTORY
rename('test', 'test2');

// DELETING A DIRECTORY
rmdir("test2");

// CHECKING IF A DIRECTORY EXISTS
is_dir("test3"); // => FALSE

// READING FILES AND FOLDERS INSIDE A DIRECTORY
$files = scandir("./");
echo ($files);

// GETTING THE CONTENTS FROM A FILE AND PRINTING IT
$lorem = file_get_contents('lorem.txt');
echo $lorem . "<br>";

// ADDING CONTENTS TO A FILE
file_put_contents('lorem.txt', "First line" . PHP_EOL . $lorem);

// USING FILE_GET TO GET THE JSON DATA FROM A URL
$jsonContent = file_get_contents("https://jsonplaceholder.typicode.com/users");
// PASSING THE JSON DATA INTO AN ASSOCIATIVE ARRAY
$contentArray = json_decode($jsonContent, true); 
// PRINTING THE ARRAY
echo ($contentArray);


//===[FILE INFORMATION]===========================================================================================================

// CHECKING IF A FILE EXISTS OR NOT
file_exists('lorem.txt'); // RETURNS A BOOLEAN VALUE

// COPYING A FILE 
copy('lorem.txt', 'lorem2.txt');

// GETTING A FILE SIZE
filesize('lorem.txt');

// DELETING A FILE
unlink('lorem.txt');




?>