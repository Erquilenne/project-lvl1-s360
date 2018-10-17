<?php

namespace BrainGames\Cli;

use function \cli\line;
use function \cli\prompt;
use function BrainGames\logic\questionEven;
use function BrainGames\logic\questionCalc;
use function BrainGames\logic\questionGcd;
use function Games\calc;


function run()
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s", $name);
    line("You wanna play? Let's play!\n");

}

function run_even()
{
    line('Welcome to the Brain Games!');
    line("You wanna play? Let's play!\n");
    line("Answer \"yes\" if number even otherwise answer \"no\".\n");
    $name = prompt('May I have your name?');
    line("Hello, %s", $name);
    for ($i = 0; $i < 3; $i++) {
        if (questionEven($name)) {
            return;
        }
    }
    line("Congratulations, %s", $name);
}

function run_calc()
{
    line('Welcome to the Brain Games!');
    line("You wanna play? Let's play!\n");
    line("What is the result of the expression?\n");
    $name = prompt('May I have your name?');
    line("Hello, %s", $name);
    for ($i = 0; $i < 3; $i++) {
        if (questionCalc($name)) {
            return;
        }
    }
    line("Congratulations, %s", $name);
}

function run_gcd()
{
    line('Welcome to the Brain Games!');
    line("You wanna play? Let's play!\n");
    line("Find the greatest common divisor of given numbers.\n");
    $name = prompt('May I have your name?');
    line("Hello, %s", $name);
    $circles = 3;
    for ($i = 0; $i < $circles; $i++) {
        if (questionGcd($name)) {
            return;
        }
    }
    line("Congratulations, %s", $name);
}
