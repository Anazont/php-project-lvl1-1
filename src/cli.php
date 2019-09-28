<?php

/**
 * Command Line functions to interraction with user
 *
 * PHP version 7.3
 *
 * @category PHP
 * @package  Php-project-lvl1
 * @author   Rinat Salimyanov <rinatsin@gmail.com>
 * @license  https://github.com/Rinatsin/php-project-lvl1 MIT
 * @link     https://github.com/Rinatsin/php-project-lvl1
 */


namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

const ROUNDS = 3;

/**
 * This function start this project
 *
 * @param integer $userValue first value
 * @param integer $corAnswer second value
 *
 * @return void
 */
function run($userValue = 0, $corAnswer = 0)
{
    line("Welcome To The Brain Games!");
    line("Answer 'yes' if the number is even, otherwise answer 'no'.");
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    if ($userValue !== 0 AND $corAnswer !== 0) {
        for ($i = 0; $i < ROUNDS; $i++) {
            if ($userValue !== $corAnswer) {
                line(" '%s' is wrong answer ;(.", $userValue);
                line("Correct answer was '%s'.Let's try again, %s!", $corAnswer, $name);
                exit;
            } else {
                line("Correct!");
            }
        }
            line("Congratulations, %s", $name);
    }
}
