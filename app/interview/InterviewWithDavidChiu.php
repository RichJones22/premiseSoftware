<?php
/*
function HelloWorld() {
    print "Hello";
}

HelloWorld();



1. Create a function called generateArray() that generates an array of random integers,
where the length of the array and the maximum random value are defined as parameters.
For example, generateArray(5, 3) may generate the array [3, 2, 0, 1, 1]. Random values
should be between 0 and the maximum random value inclusive.
*/

if (1 === 0) {
    function generateArray($count, $maxInt)
    {
        $outArray = [];

        for ($i = 0; $i < $count; ++$i) {
            $outArray[] = rand(0, $maxInt);
        }

        return $outArray;
    }

    print_r(generateArray(5,3));
}


/*
2. Create a function called findDuplicates() that takes the array of integers as input
and returns the duplicates of that array as output. For example, findDuplicates([3,3,2,1,1,3])
would return [1, 3].
 **/

if (1 === 0) {
    function findDuplicates(array $findDups)
    {
        $result = [];

        for ($i = 0; $i < count($findDups); ++$i) {
            for ($j = $i + 1; $j < count($findDups); ++$j) {
                if ($findDups[$i] === $findDups[$j]) {
                    if ( ! in_array($findDups[$i], $result, true)) {
                        $result[] = $findDups[$i];
                    }
                }
            }
        }

        return $result;
    }
}

function findDuplicates2(array $duplicates)
{

    $duplicatesRemoved[] = $duplicates[0];

    $found[$duplicates[0]] = true;

    for ($i = 1; $i < count($duplicates); ++$i) {
        if ( ! isset($found[$duplicates[$i]])) {
            $duplicatesRemoved[] = $duplicates[$i];
            $found[$duplicates[$i]] = true;
        }
    }

    return $duplicatesRemoved;
}

print_r(findDuplicates2([1, 1, 1, 2, 2, 3, 4, 3, 6, 3]));

//        if (isset($numbersLookedAt[$findDups[$i]]) && ! $numbersLookedAt[$findDups[$i]]) {
//            $result[] = $findDups[$i];
//            unset($numbersLookedAt[$findDups[$i]]);
//        } elseif (! isset($numbersLookedAt[$findDups[$i]])) {
//            $numbersLookedAt[$findDups[$i]] = false;
//        }
