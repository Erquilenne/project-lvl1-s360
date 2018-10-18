<?php

namespace BrainGames\logic;

use function \cli\line;
use function \cli\prompt;

const COUNT_OF_GAMES = 3;

function game($description, $getQuestionAndCorrectAnswer)
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s", $name);
    line("You wanna play? Let's play!\n");
    line($description);
    for ($i = 0; $i < COUNT_OF_GAMES; $i++) {
        [$question, $correctAnswer] = $getQuestionAndCorrectAnswer();
        line('Question: %s', $question);
        $answer = prompt('Your answer ');
        if ($answer === (string)$correctAnswer) {
            line('Correct!');
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $correctAnswer);
            line("Let's try again, %s!", $name);
            return;
        }
    }
    line("Congratulations, %s!", $name);
}
