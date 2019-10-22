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
const MAX_RANDOM_VALUE = 35;

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
    $progressionLength = 10;
    $progression = [];
    for ($i = 0; $i < $progressionLength; $i++) {
        $progression[] = $start + $diff * $i;
    }
    return $progression;
}

/**
 * Function run game progression
 *
 * @return void
 */
function runProgression()
{
    $getProgressionData = function () {
        $hideElementIndex = mt_rand(0, 9);
        $firstValue = mt_rand(1, MAX_RANDOM_VALUE);
        $diff = mt_rand(1, MAX_RANDOM_VALUE);
        $progression = getProgression($firstValue, $diff);
        $progressionWithHideElement = $progression;
        $progressionWithHideElement[$hideElementIndex] = '..';

        $currentAnswer = strval($progression[$hideElementIndex]);
        $question = implode(' ', $progressionWithHideElement);

        $gameData = [];
        $gameData['currentAnswer'] = $currentAnswer;
        $gameData['question'] = $question;
        return $gameData;
    };
    
    run($getProgressionData, DESCRIPTION);
}
