<?php

namespace BrainGames\Cli;

use function \cli\line;
use function \cli\prompt;

function run()
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s", $name);
}

function run_even()
{
  
}
