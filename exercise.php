<?php
/**
 * This exercise outputs the lowest 10 positive integers where:
 *  1. The sum of the digits of each integer equals 10
 *  2. Contains the number 7 as one of the digits
 */

//  Outputs the lowest 10 positive integers where the sum of the digits of each integer equals 10 and contains the number 7 as one of the digits
/**
 * Calling the executor
 */
$result = getFirst10();
foreach ($result as $integer) {
    echo "$integer <br/>";
}

/**
 * Holds a function to returns within an array the first 10 positive integer that meet the following criteria
 *
 * contains `7` within digits.
 * the sum of theirs digits is 10
 *
 * @return array The first integer and positive that meet the criteria
 */
function getFirst10(): array
{
    $result = [];

    // Let's start assuming that the initial number is 37.
    $integer = 37;

    while (count($result) < 10) {
        if (_meetCriteria($integer)) {
            $result[] = $integer;
        }

        $integer++;
    }

    return $result;
}

/**
 * Holds a helper function to determinate of whether the given integer meets the criteria:
 *
 * contains `7` within digits.
 * the sum of theirs digits is 10
 *
 * @param int $integer
 *
 * @return bool true if meet , otherwise false.
 */
function _meetCriteria(int $integer): bool
{
    $splitInteger = str_split($integer);
    $exist7       = in_array(7, $splitInteger);
    $isSum10      = array_sum($splitInteger) === 10;

    return $exist7 && $isSum10;
}