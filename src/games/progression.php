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

use function BrainGames\Engine\run;

const DESCRIPTION = "What number is missing in the progression?";
const PROGRESSION_LENGTH = 10;

/**
 * Function generate random arithmetic progression
 *
 * @param int $start first value of progression
 * @param int $diff  progression step
 *
 * @return array
 */
function getProgression($start, $diff)
{
    $progression = [];
    for ($i = 0; $i < PROGRESSION_LENGTH; $i++) {
        $progression[] = $start + $diff * $i;
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
 * Function run game progression
 *
 * @return void
 */
function runProgression()
{
    $progression = function () {
        $gameData = [];
        $hideElementIndex = mt_rand(0, 9);
        $firstValue = mt_rand(1, 35);
        $diff = mt_rand(1, 35);
        $progression = getProgression($firstValue, $diff);
        $gameData['question'] = implode(' ', getProgressionWithHideIndex($hideElementIndex, $progression));
        $gameData['currentAnswer'] = strval($progression[$hideElementIndex]);
        return $gameData;
    };
    
    run($progression, DESCRIPTION);
}
