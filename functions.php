//=====[FUNCTIONS]=================================================================================

<?php

// function functionName() {
//     code to be executed;
// }

function hello()
{
    echo "Hello World<br>";
}

hello();


function sum($a, $b){
    return $a + $b;
}

echo "total = " . sum(4,5);
echo "total = " . sum(9,10);


//===[DEFAULT ARGUMENTS]============================================================================

function setHeight($minheight = 50) {
    echo "The height is : $minheight <br>";
  }
  
  setHeight(350);
  setHeight(); // will use the default value of 50



// Create function to sum all numbers using ...$nums
//function sum(...$nums)
//{
//    $sum = 0;
//    foreach ($nums as $num) $sum += $num;
//    return $sum;
//}
//echo sum(1, 2, 3, 4, 6);
//
// Arrow functions
//function sum(...$nums)
//{
//    return array_reduce($nums, fn($carry, $n) => carry + $n);
//}
//echo sum(1, 2, 3, 4, 6);





