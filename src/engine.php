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

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

const ROUNDS_COUNT = 3;

/**
 * Function run game
 *
 * @param array  $game        save game param to variable
 * @param string $description save game rules
 *
 * @return void
 */
function run($game = [], $description = '')
{
    line("Welcome To The Brain Games!");
    if ($description === '') {
        exit;
    }
    line($description);
    $gameData = $game();
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        flow($name, $gameData['question'], $gameData['currentAnswer']);
        $gameData = $game();
    }
    line("Congratulations, %s", $name);
}

/**
 * This function release main engine in the progect
 *
 * @param string $name          string of Name
 * @param string $question      show user question value
 * @param string $currentAnswer true answer for the compare
 *
 * @return void
 */
function flow($name, $question, $currentAnswer)
{
    $userAnswer = prompt("Question: {$question}");
    if ($userAnswer !== $currentAnswer) {
        line(" '%s' is wrong answer ;(.", $userAnswer);
        line("Correct answer was '%s'.Let's try again, %s!", $currentAnswer, $name);
        exit;
    } else {
        line("Correct!");
    }
}
