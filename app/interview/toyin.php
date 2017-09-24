<?php
/**
 * Created by PhpStorm.
 * User: Rich
 * Date: 8/21/2015
 * Time: 8:03 PM
 */

// The question was calculate the sum of the separate factorials from 1 to n.

// 1. we need a function to calculate and return a factorial for a given number.
// 2. we need to call this function for the number from 1 to n.

//helpers
function println($li = "") {
    printf($li . "\n");
}

// main algos.
function myFact($num) {
    $sum=1;

    for($i=1;$i<=$num;$i++) {
        $sum*=$i;
    }

    return $sum;
}

function factorial($number) {
    if ($number < 2) {
        return 1;
    } else {
        return ($number * factorial($number-1));
    }
}

function sumFactorial($num) {
    $sum=0;

    if ($num==1) {
        return 1;
    }

    for($i=1;$i<=$num;$i++) {
        $sum += myFact($i);
    }

    return $sum;
}

$t1 = Time();
println();
println("the sum is " . sumFactorial(4));
println();
$t2 = Time();

println($t2-$t1);

