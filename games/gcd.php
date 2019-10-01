<?php

/**
 * Command Line functions release game GCD
 *
 * PHP version 7.3
 *
 * @category PHP
 * @package  Php-project-lvl1
 * @author   Rinat Salimyanov <rinatsin@gmail.com>
 * @license  https://github.com/Rinatsin/php-project-lvl1 MIT
 * @link     https://github.com/Rinatsin/php-project-lvl1
 */

namespace BrainGames\Gcd;

use function cli\prompt;

/**
 * The function asks the user to add 2 numbers
 *
 * @param integer $num1 first random number
 * @param integer $num2 second random number
 *
 * @return integer
 */
function gcdQuestion($num1, $num2)
{
    $userValue = prompt("Question: {$num1} {$num2}");
    return $userValue;
}

/**
 * The function is expect the nunber is even
 *
 * @param integer $num1 first random number
 * @param integer $num2 second random number
 *
 * @return integer the greatest common divisor of given numbers
 */
function gcd($num1, $num2)
{
    return $num2 ? gcd($num2, $num1 % $num2) : $num1;
}
