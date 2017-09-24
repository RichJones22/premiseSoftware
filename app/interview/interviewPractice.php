<?php
/**
 * Created by PhpStorm.
 * User: Rich
 * Date: 8/19/2015
 * Time: 1:39 PM
 */

/**
 * www.toptal.com/php/interview-questions
 */

// problem 1
// in this case the position 0 in coerced to false; need to use the !== to avoid this.
if (1==0){
    $str1 = 'yabadabadoo';
    $str2 = 'yaba';

    $pos = strpos($str1,$str2);

    if (strpos($str1,$str2)!==false) {
        echo "\"" . $str1 . "\" contains \"" . $str2 . "\"";
    } else {
        echo "\"" . $str1 . "\" does not contain \"" . $str2 . "\"";
    }
}

// problem 2
// What will be the output of the code below and why?
if (1==0)
{
    $x = 5;
    echo $x;
    echo "<br />";
    echo $x+++$x++;
    echo "<br />";
    echo $x;
    echo "<br />";
    echo $x---$x--;
    echo "<br />";
    echo $x;


//5
//5 + 6 = 11
//7
//7 - 6 = 1
//5

}

// problem 3
// What will be the output of each of the statements below and why?
if (1==0) {
    var_dump(0123 == 123);
    var_dump('0123' == 123);
    var_dump('0123' === 123);

    /*
       var_dump(0123 == 123) will output bool(false) because the leading 0 in 0123 tells the PHP interpreter to treat
       the value as octal (rather than decimal) value, and 123 octal is equal to 83 decimal, so the values are not equal.
       var_dump('0123' == 123) will output bool(true) since the string 0123 will automatically be coerced to an integer
       when being compared with an integer value. Interestingly, when this conversion is performed, the leading 0 is ignored
       and the value is treated as a decimal (rather than octal) value, so the values are bother 123 (decimal) and are therefore equal.
       var_dump('0123' === 123) outputs bool(false) since it performs a more strict comparison and does not do the automatic type coercion
       of the string to an integer.

    */
}

// problem 4
// What is the problem with the code below? What will it output? How can it be fixed?
if (1==0)
{
    $referenceTable = array();                       // empty array
    $referenceTable['val1'] = array(1, 2);           //['varl1' => [1,2]]
    $referenceTable['val2'] = 3;                     // ['val1' => [1,2], 'val2' => 3]
    $referenceTable['val3'] = array(4, 5);           // ['val1' => [1,2], 'val2' => 3, 'val3' => [4,5]]

    $testArray = array();                            // []

    $testArray = array_merge($testArray, $referenceTable['val1']);
    var_dump($testArray);

// ['varl1' => [1,2]]

    $testArray = array_merge($testArray, (array)$referenceTable['val2']);
//array_push($testArray, $referenceTable['val2']);
    var_dump($testArray);

// ['val1' => [1,2], 'val2' => 3]


    $testArray = array_merge($testArray, $referenceTable['val3']);
    var_dump($testArray);

// ['val1' => [1,2], 'val2' => 3, 'val3' => [4,5]]

}

// problem 5
//
if (1==0) {
// What will this code output and why?

// order of operations... use parens...
// $x = true;       // sets $x equal to true
// true and false;  // results in false, but has no affect on anything

    $x = true and false;  // results in true
    $y = (true and false);  // results in false
    var_dump($x);
    var_dump($y);
}

// problem 6
// What will $x be equal to after the statement $x = 3 + "15%" + "$25"?
if (1==0) {
    /*
    The correct answer is 18.

    Here’s why:

    PHP supports automatic type conversion based on the context in which a variable or value is being used.

    If you perform an arithmetic operation on an expression that contains a string, that string will be interpreted
    as the appropriate numeric type for the purposes of evaluating the expression. So, if the string begins with one
    or more numeric characters, the remainder of the string (if any) will be ignored and the numeric value is interpreted
    as the appropriate numeric type. On the other hand, if the string begins with a non-numeric character, then it will
    evaluate to zero.

    With that understanding, we can see that "15%" evaluates to the numeric value 15 and "$25" evaluates to the numeric
    value zero, which explains why the result of the statement $x = 3 + "15%" + "$25" is 18 (i.e., 3 + 15 + 0).

     */

    $x = 3 + "15%" + "$25";
    var_dump($x);
}

// problem 7

// After the code below is executed, what will be the value of $text and what
// will strlen($text) return? Explain your answer.
if (1==0)
{
    $text = 'John ';  // strlen of 5
    var_dump(strlen($text));
    $text[10] = 'Doe';  // strlen = 13
    var_dump(strlen($text));


// 0 1 2 3 4 5 6 7 8 9 0 1 2 3 4 5
// J o h n b           D

    $text = 'Doe';
    var_dump($text);
}


// problem 8
// what is the result of adding 1 to the make of an int type.
if (1==0)
{
    $myInt = PHP_INT_MAX;

    var_dump(PHP_INT_MAX);
    var_dump(PHP_INT_MAX + 1); // flips to a double.
    var_dump((int)PHP_INT_MAX + 1); // wrap due to out of bounds.

}

// problem 9
/*
    How would you sort an array of strings to their natural case-insensitive order, while maintaing their original
    index association?
    For example, the following array:
*/
// Very interesting problem
if (1==1) {

// before
    $myArray = array(
        '0' => 'z1',
        '1' => 'Z10',
        '2' => 'z12',
        '3' => 'Z2',
        '4' => 'z3',
    );

    asort($myArray, SORT_STRING | SORT_FLAG_CASE | SORT_NATURAL);

    var_dump($myArray);


$max = sizeof($myArray);

foreach($myArray as $key => $value)
{
//    echo "$key = $value\n";
//    printf("the key is: " . $key . " and the value is: " . $value . "\n");
    printf($value . "\n");
//    printf("the key is: " . $key . " and the $myArray is: " . $myArray[$key] . "\n");
}

function mySort($myArray) {
    $max = sizeof($myArray);
    for($i=0;$i<$max;$i++) {
        for($j=$i+1;$j<$max;$j++) {
            printf("I is: " . $i . " and j is: " . $j . "\n");
        }
    }
}


//function mySort($myArray) {
//    $max = sizeof($myArray);
//    $tmpArray = array();
//
//    for($i=0;$i<$max;$i++) {
//
//        $tmpArray[$i] = $myArray[$i];
//        $curI = $myArray[$i];
//
//        for($j=$i+1;$j<$max;$j++) {
//
//            $curJ = $myArray[$j];
//
//            if (strncasecmp($curI, $curJ)) {
//                $tmpArray[$i] = $myArray[$i];
//                $curI = strtoupper($myArray[$i]);
//            } else {
//                $tmpArray[$i] = $myArray[$j];
//                $curI = $myArray[$j];
//            }
//        }
//    }
//    return $tmpArray;
//}

//function mySort($myArray) {
//    $max = sizeof($myArray);
//    $tmpArray = array();
//
//    for($i=0;$i<$max-1;$i++) {
//
//        $curI = strtoupper($myArray[$i]);
//        $curI_length = strlen($curI);
//
//        for($j=$i+1;$j<$max;$j++) {
//
//            $curJ = strtoupper($myArray[$j]);
//            $curJ_length = strlen($curJ);
//
//            if ($curI_length > $curJ_length) {
//                if (strncasecmp($curI, $curJ, $curJ_length)) {
//                    $tmpArray[$i] = $myArray[$j];
//                    $curI = strtoupper($myArray[$j]);
//                } else {
//                    $tmpArray[$i] = $myArray[$i];
//                }
//            } elseif ($curJ_length > $curI_length) {
//                if (strncasecmp ($curJ, $curI, $curI_length)) {
//                    $tmpArray[$i] = $myArray[$i];
//                } else {
//                    $tmpArray[$i] = $myArray[$j];
//                }
//            } else {
//                if (strnatcmp ($curJ, $curI)) {
//                    $tmpArray[$i] = $myArray[$i];
//                } else {
//                    $tmpArray[$i] = $myArray[$j];
//                }
//            }
//        }
//    }
//    return $tmpArray;
//}
//

mySort($myArray);

// Afterå
//array(
//    '0' => 'z1',
//    '3' => 'Z2',
//    '4' => 'z3',
//    '1' => 'Z10',
//    '2' => 'z12',
//)


    /*
     function mySort($myArray) {
        $max = sizeof($myArray);
        $tmpArray = array();

        for($i=0;$i<$max-1;$i++) {

            $curI = strtoupper($myArray[$i]);
            $curI_length = strlen($curI);

            for($j=$i+1;$j<$max;$j++) {

                $curJ = strtoupper($myArray[$j]);
                $curJ_length = strlen($curJ);

                if ($curI_length > $curJ_length) {
                    if (strnatcmp ($curI, $curJ)) {
                        $tmpArray[$i] = $myArray[$j];
                        $curI = strtoupper($myArray[$j]);
                    } else {
                        $tmpArray[$i] = $myArray[$i];
                    }
                } elseif ($curJ_length > $curI_length) {
                    if (strnatcmp ($curJ, $curI)) {
                        $tmpArray[$i] = $myArray[$i];
                    } else {
                        $tmpArray[$i] = $myArray[$j];
                    }
                } else {
                    if (strnatcmp ($curJ, $curI)) {
                        $tmpArray[$i] = $myArray[$i];
                    } else {
                        $tmpArray[$i] = $myArray[$j];
                    }
                }
            }
        }
        return $tmpArray;
    }

     */

}

// problem 10
// What is PEAR in php?
if (1==0)
{
    // PEAR stands for Php extension and application repository. Contains all kinds of code snippets and libraries.

// I believe that this has been replaced with Composer?
}

// problem 11

// What are the differences between echo and print in PHP?

if (1==0) {
    /*
    echo and print are largely the same in PHP. Both are used to output data to the screen.

    The only differences are as follows:

        echo does not return a value whereas print does return a value of 1 (this enables print to be used in expressions).
        echo can accept multiple parameters (although such usage is rare) while print can only take a single argument.
    */
}


if (1==0) {
    // fizz buzz
    for($i=1;$i<=15;$i++) {

        if ($i%3 === 0 && $i%5 === 0) {
            printf("fizzbuzz\n");
        } elseif ($i%3 === 0) {
            printf("fizz\n");
        } elseif ($i%5 === 0) {
            printf("buzz\n");
        } else {
            printf("%d\n", $i);
        }
    }
}

function findDuplicates(array $findDups)
{
    $result = [];

    for($i=0;$i < count($findDups);$i++) {

        for($j=$i+1;$j < count($findDups);$j++) {

            if ($findDups[$i] === $findDups[$j]) {
                if (! in_array($findDups[$i], $result) ) {
                    $result[] = $findDups[$i];

                }
            }

        }

    }


    return $result;

}


function findDuplicates2(array $findDups) {


    $result = [];

    $numbersLookedAt = [];

    $numbersLookedAt[$findDups[0]] = false;
//     $numbersLookedAt = [
//         1 => false
//     ];


    for($i=1;$i < count($findDups);$i++) {

        // isset($numbersLookedAt[$findDups[$i]])


        if (isset($numbersLookedAt[$findDups[$i]]) && !$numberLookedAt[$findDups[$i]]) {
            $result[] = $findDups[$i];
            $numberLookedAt[$findDups[$i]] = true;

        } elseif (!isset($numbersLookedAt[$findDups[$i]])) {
            $numberLookedAt[$findDups[$i]] = false;
        }


//         if (! in_array($findDups[$i], $numbersFound)) {
//             $result[] = $findDups[$i];

//         } else {
//             $numbersFound = $findDups[$i];

//         }




//         for($j=$i+1;$j < count($findDups);$j++) {

//             if ($findDups[$i] === $findDups[$j]) {

//                 $numbersFound = $findDups[$i];


//             }

//         }

    }

}



