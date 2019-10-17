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

use function BrainGames\Engine\run;

const DESCRIPTION = "What is the result of the expression?";
const OPERATIONS = ['+', '-', '*'];

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
    switch ($operation) {
        case '+':
            $currentAnswer = $num1 + $num2;
            break;
        case '-':
            $currentAnswer = $num1 - $num2;
            break;
        case '*':
            $currentAnswer = $num1 * $num2;
            break;
    }
    return $currentAnswer;
}

/**
 * Function generate params for game brain-calc
 *
 * @return array
 */
function calc()
{
    $gameData = [];
    $operation = OPERATIONS[array_rand(OPERATIONS)];
    $num1 = mt_rand(1, 99);
    $num2 = mt_rand(1, 99);
    $gameData['currentAnswer'] = strval(calculate($num1, $num2, $operation));
    $gameData['question'] = "{$num1}{$operation}{$num2}";
    return $gameData;
}

/**
 * Function run game
 *
 * @return void
 */
function runCalc()
{
    run(__NAMESPACE__ . '\calc', DESCRIPTION);
}
