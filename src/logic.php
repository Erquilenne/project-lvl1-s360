<?php

namespace BrainGames\logic;

use function \cli\line;
use function \cli\prompt;

function questionEven($name)
{
    $number = mt_rand(1 , 999);
    $isEven = false;
    $yes = 'yes';
    $no = 'no';
    $correctAnswer = $number % 2 === 0 ? 'yes' : 'no';
    if($number % 2 === 0){
      $isEven = true;
    }
    line('Question: %s' , $number);
    $answer = prompt('Your answer ');

    if($isEven === true && $answer === $yes){
        line('Correct!');
        $correctAnswer = $yes;
    }
    elseif($isEven === false && $answer === $no){
        line('Correct!');
        $correctAnswer = $no;
    }
    else{
        line("'%s' is wrong answer ;(. Correct answer was '%s'." , $answer , $correctAnswer);
        line("Let's try again, %s!" , $name);
        return true;
    }
}
