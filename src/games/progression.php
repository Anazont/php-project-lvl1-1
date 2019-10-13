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

use function BrainGames\Cli\run;

/**
 * Function generate random arithmetic progression
 *
 * @param int $firstValue first value of progression
 * @param int $diff       progression step
 * @param int $length     length of progression
 *
 * @return array
 */
function getProgression($firstValue, $diff, $length)
{
    $progression = [];
    for ($i = 0; $i < $length; $i++) {
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
 * Function run generate params for game progression
 *
 * @return array
 */
function progression()
{
    $gameParams = [];
    $gameParams['greeting'] = "What number is missing in the progression?";
    $hideElementIndex = mt_rand(0, 9);
    $firstValue = mt_rand(1, 35);
    $diff = mt_rand(1, 25);
    $progression = getProgression($firstValue, $diff, 10);
    $gameParams['question'] = implode(' ', getProgressionWithHideIndex($hideElementIndex, $progression));
    $gameParams['currentAnswer'] = strval($progression[$hideElementIndex]);
    return $gameParams;
}

/**
 * Function run game progression
 * 
 * @return void
 */
function runProgression()
{
    run(__NAMESPACE__ . '\progression');
}
