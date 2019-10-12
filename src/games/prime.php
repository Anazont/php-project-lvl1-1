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

use function BrainGames\Cli\endGame;
use function BrainGames\Cli\flow;
use function BrainGames\Cli\run;
use function cli\prompt;

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
 * Function run game Prime number
 *
 * @return void
 */
function prime()
{
    $greeting = "Answer 'yes' if given number is prime. Otherwise answer 'no'.";
    $name = run($greeting);
    for ($i = 0; $i < 3; $i++) {
        $num = mt_rand(3, 65565);
        if (isPrime($num)) {
            $curAnswer = 'yes';
        } else {
            $curAnswer = 'no';
        }
        $question = strval($num);
        flow($name, $question, $curAnswer);
    }
    endGame($name);
}
