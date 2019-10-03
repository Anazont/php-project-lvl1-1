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

use function cli\prompt;

/**
 * The function asks the user
 *
 * @param array $progression second random number
 *
 * @return integer
 */
function progressionQuestion($progression)
{
    $str = implode(' ', $progression);
    $userValue = +prompt("Question: {$str}");
    return $userValue;
}

/**
 * Function generate random arithmetic progression
 *
 * @return array
 */
function getProgression()
{
    $firstValue = mt_rand(1, 35);
    $diff = mt_rand(2, 25);
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
 * The function is expect the number is even
 *
 * @return array array with a hide element
 */
function getIndex()
{
    $index = mt_rand(0, 9);
    return $index;
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
