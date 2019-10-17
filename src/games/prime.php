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

use function BrainGames\Engine\run;

const DESCRIPTION = "Answer 'yes' if given number is prime. Otherwise answer 'no'.";
/**
 * The function checks the number is prime
 *
 * @param integer $num random number
 *
 * @return bool if true then the number is prime
 */
function isPrime($num)
{
    if ($num < 2) {
        return $num > 2;
    }
    //if the number is even then it is not prime
    if ($num % 2 === 0) {
        return $num === 2;
    }
    $div = 3;
    //any compound number has its own divisor, not exceeding the square root of
    while ((($div * $div) <= $num) && (($num % $div) !== 0)) {
        $div += 2;
    }
    return ($div * $div) > $num;
}

/**
 * Function generate params for game Prime
 *
 * @return void
 */
function prime()
{
    $gameData = [];
    $num = mt_rand(3, 65565);
    $gameData['currentAnswer'] = isPrime($num) ? 'yes' : 'no';
    $gameData['question'] = strval($num);
    return $gameData;
}

/**
 * Function run game prime
 *
 * @return void
 */
function runPrime()
{
    run(__NAMESPACE__ . '\prime', DESCRIPTION);
}
