<?php

namespace BrainGames\Cli;

use function \cli\line;
use function \cli\prompt;
use function BrainGames\logic\questionEven;
use function BrainGames\logic\questionCalc;

function run()
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s", $name);
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
