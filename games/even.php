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

use function cli\prompt;

/**
 * The function asks the user to add 2 numbers
 *
 * @param integer $number random number
 *
 * @return integer
 */
function evenQuestion($number)
{
    $userValue = prompt("Question: {$number}");
    return $userValue;
}

/**
 * The function is expect the nunber is even
 *
 * @param integer $number random number
 *
 * @return string
 */
function isEven($number)
{
    if (($number % 2) === 0) {
        $corAnswer = 'yes';
    } else {
        $corAnswer = 'no';
    }

    return $corAnswer;
}
