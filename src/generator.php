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


namespace BrainGames\Generator;


/**
 * Function generate random value
 *
 * @return integer
 */
function generate()
{
    return rand(1, 99);
}
