<?php

/*
  Challenge 1: Sum of an array
  
  1. Create an array of numbers 
  2. Get the sum of all of the numbers combined and put into a variable.
  4. Get the amount of numbers in the array and put into a variable.
  5. Print out 'The sum of the {amount} numbers is: {sum} '. For example, if the array is [1, 2, 3, 4, 5], the output should be 'The sum of the 5 numbers is: 15'. 
*/
echo '<h3>Sum Of An Array</h3>';
$numbers = [1, 3, 34, 5, 559, 42];
$arrayLength = count($numbers);
$sum = array_sum($numbers);

foreach ($numbers as $number) {
  echo $number . '<br>';
}
echo '<br>';
echo 'The sum of the ' . $amount . ' numbers is: ' . $sum;

/*
  Challenge 2: Colors array

  1. Reverse the `$colors` array.
  2. Add 'purple' and 'orange' to the end of the array.
  3. Replace the second color with 'pink'
  4. Remove the last element of the array.

You should end up with the following array: ['yellow', 'pink', 'blue', 'red', 'purple']
*/

echo '<h3>Colors Array</h3>';

$colors = ['red', 'blue', 'green', 'yellow'];
$colors = array_reverse($colors);
array_push($colors, 'purple', 'orange');
$colors[1] = 'pink';
array_pop($colors);

print_r($colors);

/*
  Challenge 3: Job listings array

  1. Create a multi-dimensional array of associative arrays of 3 job listings with the fields id, job_title, company, contact_email, and contact_phone. Also add an array field for skills. The skills array should be an array of strings with each skill a person has. For example, 'PHP', 'MySQL', 'JavaScript', 'HTML', 'CSS', etc.
  2. Create a new listing using the `array_push()` function. The new listing should have the same fields as the others.
  3. Print out the job_title of the second job listing in the array.
  4. Print out the first skill of the third job listing in the array.
*/

echo '<h3>Job Listings</h3>';
$listings = [
  [
    'id' => 445,
    'job_title' => 'Senior Php Developer',
    'company' => 'Big Tech Company',
    'contact_email' => 'seriouscompany@gmail.com',
    'contact_phone' => '3335-5445',
    'skills' => ['php', 'laravel', 'web development', 'advanced english']
  ],
  [
    'id' => 343,
    'job_title' => 'Senior Backend Developer',
    'company' => 'Big Tech Company',
    'contact_email' => 'seriouscompany@gmail.com',
    'contact_phone' => '3335-5445',
    'skills' => ['python', 'uml', 'web development', 'advanced english']
  ],
  [
    'id' => 223,
    'job_title' => 'Senior Frontend Developer',
    'company' => 'Big Tech Company',
    'contact_email' => 'seriouscompany@gmail.com',
    'contact_phone' => '3335-5445',
    'skills' => ['javascript', 'react', 'web development', 'advanced english']
  ]
];

array_push($listings, 
[
  'id' => 102,
  'job_title' => 'Senior UX/UI Designer',
  'company' => 'Big Tech Company',
  'contact_email' => 'seriouscompany@gmail.com',
  'contact_phone' => '3335-5445',
  'skills' => ['figma', 'ux', 'web development', 'advanced english']
]);

echo $listings[1]['job_title'] . '<br>';
echo $listings[2]['skills'][0];