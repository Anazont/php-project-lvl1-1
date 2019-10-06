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

namespace BrainGames\Even;

use function BrainGames\Cli\endGame;
use function BrainGames\Cli\flow;
use function BrainGames\Cli\run;

/**
 * The function is expect the nunber is even
 *
 * @param integer $num random number
 *
 * @return string
 */
function isEven($num)
{
    return ($num % 2) === 0;
}

/**
 * The function is run game even
 * 
 * @return string
 */
function even()
{
    $greeting = "Answer 'yes' if the number is even, otherwise answer 'no'.";
    $name = run($greeting);
    for ($i = 0; $i < 3; $i++) {
        $num = mt_rand(1, 99);
        if (isEven($num)) {
            $curAnswer = "yes";
        } else {
            $curAnswer = "no";
        }
        $question = strval($num);
        flow($name, $question, $curAnswer);
    }
    endGame($name);
}
