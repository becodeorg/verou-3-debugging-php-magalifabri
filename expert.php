<?php

// In strict mode, only a variable of the requested type (like: int of the type declaration) will be accepted, or a TypeError will be thrown.
declare(strict_types=1);

// Below are several code blocks, read them, understand them and try to find whats wrong.
// Once this exercise is finished, we'll go over the code all together and we can share how we debugged the following problems.
// Try to fix the code every time and good luck ! (write down how you found out the answer and how you debugged the problem)
// =============================================================================================================================

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


// === Exercise 1 ===

// Below we're defining a function, but it doesn't work when we run it.
// Look at the error you get, read it and it should tell you the issue...,
// sometimes, even your IDE can tell you what's wrong
echo "Exercise 1 starts here:";

function new_exercise($x)
{
    $block = "<br/><hr/><br/><br/>Exercise ${x} starts here:<br/>";
    echo $block;
}




// === Exercise 2 ===
new_exercise(2);

// Below we create a week array with all days of the week.
// We then try to print the first day which is monday, execute the code and see what happens.

$week = ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"];
$monday = $week[0];

echo $monday;




// === Exercise 3 ===
new_exercise(3);

// This should echo ` "Debugged !" `, fix it so that that is the literal text echo'ed

$str = "\"Debugged !\" Also very fun";
echo "&nbsp;" . substr($str, 0, 12) . "&nbsp;";


// === Exercise 4 ===
new_exercise(4);

// Sometimes debugging code is just like looking up code and syntax...
// The print_r($week) should give:  Array ( [0] => mon [1] => tues [2] => wednes [3] => thurs [4] => fri [5] => satur [6] => sun )
// Look up whats going wrong with this code, and then fix it
// Bonus: can you fix it with changing just one character? (hard)

foreach ($week as &$day) {
    $day = substr($day, 0, -3);
}

// foreach ($week as $index => $day) {
//     $week[$index] = substr($day, 0, -3);
// }

print_r($week);




// === Exercise 5 ===
new_exercise(5);

// The result should be: "Copyright © <current year> - BeCode"
function copyright($year)
{
    return "&copy; ${year} - BeCode";
}
//print the copyright
echo copyright(date('Y'));




// === Exercise 6 ===
new_exercise(6);

// The array should be printing every letter of the alphabet (a-z)
// Fix the code so the for loop pushes each letter of the alphabet in the array

$arr = [];
$letter = 'a';
for ($i = 0; $letter; $i++) {
    array_push($arr, $letter);

    if ($letter === 'z') {
        break;
    }

    $letter++;
}

print_r($arr); // Array ([0] => a, [1] => b, [2] => c, ...) a-z alphabetical array




// === Exercise 7 ===
new_exercise(7);

// Have the result of the function say: "Welcome John Smith" or "No access"
// Depending on the given information.
function login(string $email, string $password)
{
    if ($email == 'john@example.be' && $password == 'pocahontas') {
        return 'Welcome John Smith';
    } else {
        return 'No access';
    }
}
/* do not change any code below */
//should greet the user with his full name (John Smith)
echo login('john@example.be', 'pocahontas') . "<br>";
//Should say: no access
echo login('john@example.be', 'dfgidfgdfg') . "<br>";
//Should say: no access
echo login('wrong@example', 'wrong');
/* You can change code again */




// === Exercise 8 ===
new_exercise(8);

// Check if the link is containing one of the below parts and respond with the correct message
function isLinkValid(string $link)
{
    $unacceptables = array('https:', '.doc', '.pdf', '.jpg', '.jpeg', '.gif', '.bmp', '.png');

    foreach ($unacceptables as $unacceptable) {
        if (strpos($link, $unacceptable) !== false) {
            return 'Unacceptable Found<br />';
        }
    }
    return 'Acceptable<br />';
}
//invalid link
echo isLinkValid('http://www.google.com/hack.pdf');
//invalid link
echo isLinkValid('https://google.com');
//VALID link
echo isLinkValid('http://google.com');
//VALID link
echo isLinkValid('http://google.com/test.txt');

echo strpos('https://google.com', 'https:');


// === Exercise 9 ===
// new_exercise(9);

// //Filter the array $areTheseFruits to only contain valid fruits
// //do not change the arrays itself
// $areTheseFruits = ['apple', 'bear', 'beef', 'banana', 'cherry', 'tomato', 'car'];
// $validFruits = ['apple', 'pear', 'banana', 'cherry', 'tomato'];
// //from here on you can change the code
// for($i=0; $i <= count($areTheseFruits); $i++) {
//     if(!in_array($areTheseFruits[$i], $validFruits)) {
//         unset($areTheseFruits[$i]);
//     }
// }
// var_dump($areTheseFruits);//do not change this




// === Exercise 10 ===
// new_exercise(10);

// // The fixed code should echo the following at the bottom:
// // Here is the name: $name - $name2
// // $name variables are randomly combined as seen in the code, fix all the bugs whilst keeping the functionality!
// // Examples: captain strange, ant widow, iron man, ...
// $arr = [];

// function combineNames($str1 = "", $str2 = "")
// {
//     $params = [$str1, $str2];
//     foreach($params as $param) {
//         if ($param == "") {
//             $param = randomHeroName();
//         }
//     }
//     echo implode($params, " - ");
// }

// function randomHeroName()
// {
//     $hero_firstnames = ["captain", "doctor", "iron", "Hank", "ant", "Wasp", "the", "Hawk", "Spider", "Black", "Carol"];
//     $hero_lastnames = ["America", "Strange", "man", "Pym", "girl", "hulk", "eye", "widow", "panther", "daredevil", "marvel"]
//     $heroes = [$hero_firstnames, $hero_lastnames];
//     $randName = $heroes[rand(0,count($heroes))][rand(0, 10)];

//     echo $randName;
// }

// echo "Here is the name: " . combineNames();

// // === The end ===
// // GREAT! Well done!