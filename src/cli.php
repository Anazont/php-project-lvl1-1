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

use function BrainGames\Calc\calcQuestion;
use function BrainGames\Calc\calculate;
use function BrainGames\Even\evenQuestion;
use function BrainGames\Even\isEven;
use function BrainGames\Generator\generate;
use function cli\line;
use function cli\prompt;

const ROUNDS = 3;

/**
 * This function start this project
 *
 * @param string $game type og Game
 *
 * @return void
 */
function run($game = 'nogame')
{
    line("Welcome To The Brain Games!");
    if ($game === 'even') {
        line("Answer 'yes' if the number is even, otherwise answer 'no'.");
    } elseif ($game === 'calc') {
        line("What is the result of the expression?");
    } else {
        line("This is the collection of Brain Games");
    }
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    for ($i = 0; $i < ROUNDS; $i++) {
        $values = [];
        $values = changeGame($game);
        if (!isset($values)) {
            exit;
        }
        if ($values['userValue'] !== $values['corAnswer']) {
            line(" '%s' is wrong answer ;(.", $values['userValue']);
            line("Correct answer was '%s'.Let's try again, %s!", $values['corAnswer'], $name);
            exit;
        } else {
            line("Correct!");
        }
    }
        line("Congratulations, %s", $name);
}

/**
 * This function start this project
 *
 * @param string $game type og Game
 *
 * @return array
 */
function changeGame($game = 'nogame')
{
    $values = [];
    if ($game === 'even') {
        $num = generate();
        $values['userValue'] = evenQuestion($num);
        $values['corAnswer'] = isEven($num);
    } elseif ($game === 'calc') {
        $operations = ['+', '-', '*'];
        $num1 = generate();
        $num2 = generate();
        $operation = $operations[array_rand($operations)];
        $values['userValue'] = calcQuestion($num1, $num2, $operation);
        $values['corAnswer'] = calculate($num1, $num2, $operation);
    }
    return $values;
}