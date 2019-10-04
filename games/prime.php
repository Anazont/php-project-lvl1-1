<?php

/**
 * Command Line functions release game Prime numbers
 *
 * PHP version 7.3
 *
 * @category PHP
 * @package  Php-project-lvl1
 * @author   Rinat Salimyanov <rinatsin@gmail.com>
 * @license  https://github.com/Rinatsin/php-project-lvl1 MIT
 * @link     https://github.com/Rinatsin/php-project-lvl1
 */

namespace BrainGames\Prime;

use function cli\prompt;

/**
 * The function asks the user the number is prime
 *
 * @param integer $num random number
 *
 * @return integer
 */
function primeQuestion($num)
{
    $userValue = prompt("Question: {$num}");
    return $userValue;
}

/**
 * The function checks the number is prime
 *
 * @param integer $num random number
 *
 * @return bool
 */
function isPrime($num)
{
    if ($num % 2 === 0) {
        return $num === 2;
    }
    $d = 3;
    while ((($d * $d) <= $num) && (($num % $d) !== 0)) {
        $d += 2;
    }
    return ($d * $d) > $num;
}

/**
 * The function return correct string answer
 *
 * @param integer $num random number
 *
 * @return string
 */
function isPrimeToStr($num)
{
    if (isPrime($num)) {
        $corAnswer = 'yes';
    } else {
        $corAnswer = 'no';
    }

    return $corAnswer;
}
