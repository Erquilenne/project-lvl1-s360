<?php
namespace BrainGames\Calc;

function questionEven($name)
{
    $question = mt_rand(1, 999);
    $even = false;
    $yes = 'yes';
    $no = 'no';
    $correctAnswer = isEven($question) ? 'yes' : 'no';
    $even = isEven($question) ? true : false;
    line('Question: %s', $question);
    $answer = prompt('Your answer ');

    if ($answer == $correctAnswer) {
        line('Correct!');

    } else {
        line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $correctAnswer);
        line("Let's try again, %s!", $name);
        return true;
    }
}



function isEven($question){
    return $question % 2 ===0;
}
