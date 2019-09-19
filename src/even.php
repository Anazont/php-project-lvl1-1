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

use function cli\line;
use function cli\prompt;
use function BrainGames\Cli\run;

/**
 * The function is expect the nunber is even
 *
 * @return void
 */
function isEven()
{
    $name = run();
    $numbersIsEven = [
        15 => 'no',
        6 => 'yes',
        7 => 'no'
    ];
    foreach ($numbersIsEven as $number => $evenValue) {
        $userValue = prompt("Question: {$number}");
        if ($userValue !== $evenValue) {
            line(" '%s' is wrong answer ;(.", $userValue);
            line("Correct answer was '%s'.Let's try again, %s!", $evenValue, $name);
            exit;
        } else {
            line("Correct!");
        }
    }
    line("Congratulations, %s", $name);
}
