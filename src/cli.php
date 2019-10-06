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

/**
 * This function start this project
 *
 * @param string $greeting string of Greeting
 *
 * @return string
 */
function run($greeting = "")
{
    line("Welcome To The Brain Games!");
    line($greeting);
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    return $name;
}

/**
 * This function start this project
 *
 * @param string $name      string of Name
 * @param string $question  show user question value
 * @param string $curAnswer true answer for the compare
 *
 * @return void
 */
function flow($name, $question, $curAnswer)
{
    $userAnswer = userAnswer($question);
    if ($userAnswer !== 'yes' || $userAnswer !== 'no') {
        $userAnswer *= 1;
    }
    if ($userAnswer !== $curAnswer) {
        line(" '%s' is wrong answer ;(.", $userAnswer);
        line("Correct answer was '%s'.Let's try again, %s!", $curAnswer, $name);
        exit;
    } else {
        line("Correct!");
    }
}

/**
 * This function start this project
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
