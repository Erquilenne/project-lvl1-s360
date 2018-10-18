<?php

namespace BrainGames\logic;

use function \cli\line;
use function \cli\prompt;

function game($description, $getQuestionAndCorrectAnswer)
{
    $countOfGames = 3;


    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s", $name);
    line("You wanna play? Let's play!\n");
    line($description);
    for ($i = 0; $i < $countOfGames; $i++) {
        [$question, $correctAnswer] = $getQuestionAndCorrectAnswer();
        line('Question: %s', $question);
        $answer = prompt('Your answer ');
        if ($answer == $correctAnswer) {
            line('Correct!');
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $correctAnswer);
            line("Let's try again, %s!", $name);
            return;
        }
    }
    line("Congratulations, %s!", $name);
}
