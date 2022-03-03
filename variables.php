//=====[VARIABLES]======================================

//=====[DECLARING VARIABLES]===========================================

=> IN PHP, VARIABLES DO NOT HAVE TO BE DECLARED 
BEFORE THEY ARE USED

$name = "Dion";
$age = 28;
$isMale = true; 
$height = 1.85;
$salary = null;

//=====[PRINTING VARIABLES]===========================================

echo $name . '<br>';
echo $age . '<br>';
echo $isMale . '<br>';
echo $height . '<br>';
echo $salary . '<br>';

//=====[PRINTING VARIABLE TYPES]===========================================

echo gettype($name) . '<br>';
echo gettype($age) . '<br>';
echo gettype($isMale) . '<br>';
echo gettype($height) . '<br>';
echo gettype($salary) . '<br>';

//=====[CHECKING VARIABLE TYPES]===========================================

is_string($name); // false
is_int($age); // true
is_bool($isMale); // true
is_double($height); // true

// Check if variable is defined

var_dump(isset($name));
var_dump(isset($name2));
echo '<br>';

// Constants

define('PI', 3.14);
echo PI.'<br>';
var_dump(defined('PI')); // defined(PI2)
echo '<br>';


//=====[PHP BUILT-IN CONSTANTS]================================================

echo SORT_ASC.'<br>';
echo PHP_INT_MAX.'<br>';





