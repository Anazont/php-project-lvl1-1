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

use function BrainGames\Engine\run;

const DESCRIPTION = "Find the greatest common divisor of given numbers.";

/**
 * The function is expect the number is even
 *
 * @param integer $num1 first random number
 * @param integer $num2 second random number
 *
 * @return integer the greatest common divisor of given numbers
 */
function getGcd($num1, $num2)
{
    return $num2 ? getGcd($num2, $num1 % $num2) : $num1;
}

/**
 * The function run game GCD
 *
 * @return integer the greatest common divisor of given numbers
 */
function gcd()
{
    $gameData = [];
    $num1 = mt_rand(1, 99);
    $num2 = mt_rand(1, 99);
    $gameData['currentAnswer'] = strval(getGcd($num1, $num2));
    $gameData['question'] = "{$num1} {$num2}";
    return $gameData;
}

/**
 * Function run game gcd
 *
 * @return void
 */
function runGcd()
{
    run(__NAMESPACE__ . '\gcd', DESCRIPTION);
}
