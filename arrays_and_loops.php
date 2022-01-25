<!-- MTM1531 A01 - Arrays and Loops
This is a submission by Saya(Masayo) Williams
January XX, 2022 -->

<?php
// distribution code:
$fname_str = "John, Jenna, Harry, Don";
$lname_str = "Smith, Cores, Zab, Willson";
$age_str = "15, 25, 35, 45";

// ****** TASK 1 ******

/* 
Declare variable $fname_arr and assign 
it with array gotten from $fname_str; 
*/
$fname_arr = (explode(", ", $fname_str));

/* 
Declare variable $lname_arr and assign 
it with array gotten from $lname_str; 
*/
$lname_arr = (explode(", ", $lname_str));

/* 
Declare variable $age_arr and assign 
it with array gotten from $age_str; 
*/
$age_arr = (explode(", ", $age_str));


// ****** TASK 2 ******
/* Use while-loop to print out all array elements of each array from task 1. Every array 
element needs to be printed in a new line. */


$i = 0;
while ($i < sizeof($fname_arr))
{
    echo $fname_arr[$i] . "<br />";
    $i++;
}

echo "<br />"; // newline

$i = 0;
while ($i < sizeof($lname_arr))
{
    echo $lname_arr[$i] . "<br />";
    $i++;
}

echo "<br />"; // newline

$i = 0;
while ($i < sizeof($age_arr))
{
    echo $age_arr[$i] . "<br />";
    $i++;
}

echo "<br />"; //newline


// ****** TASK 3 ******
/* Concatenate the array values from arrays in task 1 and string literals needed to form the following sentence: Jenna Cores is 25. 
Print the concatenated expression. */

echo $fname_arr[1] . " " . $lname_arr[1] . " is " . $age_arr[1] . ".<br />";


// ****** TASK 4 ******
/* Use while-loop to add up all array elements of the array $age_arr.

You will need to declare another variable ($sum for example) and assign it with initial value 0. Append the value of each array element (inside the loop) to your variable $sum using += operator. All of this (looping and adding value in the fly) can be replaced with array_sum( ).
*/

// define $sum1 & $k as 0 (starting index)
$sum1 = $k = 0;

// use while loop to add up all values of $age_arr until done adding 
while ($k < sizeof($age_arr))
{
    $sum1 += $age_arr[$k]; // add each value to $sum1
    $k++; // increment index
}

// use array_sum() to add all values of $age_arr
$sum2 = array_sum($age_arr);

/* Finally, use concatenation to form and print the following sentence: The sum of all array elements is.... */
echo "The sum of all array elements is " . $sum1 . "!<br />";
echo "Using array_sum(), the sum is " . $sum2 . "!<br />";


?>