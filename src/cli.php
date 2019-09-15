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

use function \cli\line;
use function \cli\prompt;

/**
 * This function start this project 
 * 
 * @return void
 */
function run()
{
    line("Welcome To The Brain Games!");
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
}