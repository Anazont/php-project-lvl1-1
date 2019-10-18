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

use function BrainGames\Engine\run;

const DESCRIPTION = "Answer 'yes' if the number is even, other answer 'no'.";
const MAX_RANDOM_VALUE = 99;

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
 * Function run game even
 *
 * @return void
 */
function runEven()
{
    $even = function () {
        $gameData = [];
        $gameData['question'] = strval(mt_rand(1, MAX_RANDOM_VALUE));
        $gameData['currentAnswer'] = isEven($gameData['question']) ? "yes" : "no";
        return $gameData;
    };
    run($even, DESCRIPTION);
}
