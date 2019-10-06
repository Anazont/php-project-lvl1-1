<?php

/**
 * Command Line functions release game Arithmetic Progression
 *
 * PHP version 7.3
 *
 * @category PHP
 * @package  Php-project-lvl1
 * @author   Rinat Salimyanov <rinatsin@gmail.com>
 * @license  https://github.com/Rinatsin/php-project-lvl1 MIT
 * @link     https://github.com/Rinatsin/php-project-lvl1
 */

namespace BrainGames\Progression;

use function BrainGames\Cli\endGame;
use function BrainGames\Cli\flow;
use function BrainGames\Cli\run;

/**
 * Function generate random arithmetic progression
 *
 * @param int $firstValue first value of progression
 * @param int $diff       progression step
 *
 * @return array
 */
function getProgression($firstValue, $diff)
{
    $progression = [];
    for ($i = 0; $i < 10; $i++) {
        if (empty($progression)) {
            $progression[] = $firstValue;
        } else {
            $progression[] = $progression[$i - 1] + $diff;
        }
    }
    return $progression;
}

/**
 * The function is hide random array index
 *
 * @param int   $index       random arithmetic prohression
 * @param array $progression random arithmetic progression
 *
 * @return array array with a hide element
 */
function getProgressionWithHideIndex($index, $progression)
{
    $progression[$index] = '..';
    return $progression;
}

/**
 * Function run game arithmetic progression
 *
 * @return void
 */
function progression()
{
    $greeting = "What number is missing in the progression?";
    $name = run($greeting);
    for ($i = 0; $i < 3; $i++) {
        $index = mt_rand(0, 9);
        $firstValue = mt_rand(1, 35);
        $diff = mt_rand(1, 25);
        $progression = getProgression($firstValue, $diff);
        $question = implode(' ', getProgressionWithHideIndex($index, $progression));
        $curAnswer = strval($progression[$index]);
        flow($name, $question, $curAnswer);
    }
    endGame($name);
}
