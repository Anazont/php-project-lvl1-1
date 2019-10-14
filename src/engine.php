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

const ROUNDS = 3;

/**
 * Function run game
 *
 * @param array  $game      save game param to variable
 * @param string $gameRules save game rules
 *
 * @return void
 */
function run($game, $gameRules)
{
    $gameParams = call_user_func($game);
    greeting($gameRules);
    $name = getUsername();
    for ($i = 0; $i < ROUNDS; $i++) {
        flow($name, $gameParams['question'], $gameParams['currentAnswer']);
        $gameParams = call_user_func($game);
    }
    endGame($name);
}
/**
 * This function greeting user
 *
 * @param string $greeting string of Greeting
 *
 * @return string
 */
function greeting($greeting = "")
{
    line("Welcome To The Brain Games!");
    line($greeting);
}

/**
 * Function ask the name of User
 *
 * @return string username
 */
function getUsername()
{
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    return $name;
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
    $userAnswer = userAnswer($question);
    if ($userAnswer !== $currentAnswer) {
        line(" '%s' is wrong answer ;(.", $userAnswer);
        line("Correct answer was '%s'.Let's try again, %s!", $currentAnswer, $name);
        exit;
    } else {
        line("Correct!");
    }
}

/**
 * This function print congratulation in the end
 *
 * @param string $name string of Name
 *
 * @return void
 */
function endGame($name)
{
    line("Congratulations, %s", $name);
}

/**
 * The function asks the user question
 *
 * @param integer $question random number
 *
 * @return integer
 */
function userAnswer($question)
{
    $userValue = prompt("Question: {$question}");
    return $userValue;
}
