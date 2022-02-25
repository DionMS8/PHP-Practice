<?php

//=====[DATE & TIME]============================================================================================================================

//===[COMMON CHARACTERS]====================================================================================================================

// d - day of the month (01 to 31)
// m - month (01 to 12)
// Y - year (in four digits)
// l - day of the week 
// H - 24-hour format of an hour (00 to 23)
// h - 12-hour format of an hour with leading zeros (01 to 12)
// i - Minutes with leading zeros (00 to 59)
// s - Seconds with leading zeros (00 to 59)
// a - Lowercase Ante meridiem and Post meridiem (am or pm)

// PRINTING THE CURRENT DATE AND TIME
echo date('Y-m-d H:i:s');

// PRINTING THE DATE AND TIME 24 HOURS AGO (FROM NOW)
echo date('Y-m-d H:i:s', time() - 60 * 60 * 24);

// Different format
echo date('F j Y, H:i:s');

// Print current timestamp
echo time();

// Parse date
$dateString = '2020-02-06 12:45:35';
$parsedDate = date_parse($dateString); 
echo '<pre>';
var_dump($parsedDate);
echo '</pre>';

// Parse date from format
$dateString = 'February 4 2020 12:45:35';

$parsedDate = date_parse_from_format('F j Y H:i:s', $dateString);
echo '<pre>';
var_dump($parsedDate);
echo '</pre>';







?>