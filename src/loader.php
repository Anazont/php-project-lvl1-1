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


namespace BrainGames\Loader;

/**
 * The function is load path   
 * 
 * @return void
 */
function load()
{
    $loadPath1 = __DIR__.'/../../../autoload.php';
    $loadPath2 = __DIR__.'/../vendor/autoload.php';

    if (file_exists($loadPath1)) {
        include_once $loadPath1;
    } else {
        include_once $loadPath2;
    }
}