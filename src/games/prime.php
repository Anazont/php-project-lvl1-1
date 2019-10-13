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
 * Function generate params for game Prime
 *
 * @return void
 */
function prime()
{
    $gameParams = [];
    $gameParams['greeting'] = "Answer 'yes' if given number is prime. Otherwise answer 'no'.";
    $num = mt_rand(3, 65565);
    $gameParams['currentAnswer'] = isPrime($num) ? 'yes' : 'no';
    $gameParams['question'] = strval($num);
    return $gameParams;
}

/**
 * Function run game prime
 *
 * @return void
 */
function runPrime()
{
    run(__NAMESPACE__ . '\prime');
}
