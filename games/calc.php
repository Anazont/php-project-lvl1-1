<?php

/**
 * Command Line functions release game Even
 *
 * PHP version 7.3
 *
 * @category PHP
 * @package  Php-project-lvl1
 * @author   Rinat Salimyanov <rinatsin@gmail.com>
 * @license  https://github.com/Rinatsin/php-project-lvl1 MIT
 * @link     https://github.com/Rinatsin/php-project-lvl1
 */

namespace BrainGames\Calc;

use function cli\prompt;

/**
 * The function asks the user to add 2 numbers
 *
 * @param integer $num1      first value
 * @param integer $num2      second value
 * @param string  $operation type of operation
 *
 * @return integer
 */
function calcQuestion($num1, $num2, $operation)
{
    $userValue = +prompt("Question: {$num1}{$operation}{$num2}");
    return $userValue;
}


/**
 * Function calculate two numbers
 *
 * @param integer $num1      first value
 * @param integer $num2      second value
 * @param string  $operation type of operation
 *
 * @return integer
 */
function calculate($num1, $num2, $operation)
{
    if ($operation === '+') {
        $corAnswer = $num1 + $num2;
    } elseif ($operation === '-') {
        $corAnswer = $num1 - $num2;
    } elseif ($operation === '*') {
        $corAnswer = $num1 * $num2;
    }
    return $corAnswer;
}
