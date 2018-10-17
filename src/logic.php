<?php

namespace BrainGames\logic;

use function \cli\line;
use function \cli\prompt;

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

function questionCalc($name)
{
    $num1 = mt_rand(1, 20);
    $num2 = mt_rand(1, 20);
    $correctAnswer = 0;
    $operand = mt_rand(1, 3);

    switch ($operand) {
        case 1:
            line("Question: %s + %s", $num1, $num2);
            $answer = prompt('Your answer ');
            $correctAnswer = $num1 + $num2;
            if ($num1 + $num2 == $answer) {
                line('Correct!');
            } else {
                line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $correctAnswer);
                line("Let's try again, %s!", $name);
                  return true;
            }
            break;

        case 2:
            line("Question: %s - %s", $num1, $num2);
            $answer = prompt('Your answer ');
            $correctAnswer = $num1 - $num2;
            if ($num1 - $num2 == $answer) {
                line('Correct!');
            } else {
                line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $correctAnswer);
                line("Let's try again, %s!", $name);
                return true;
            }
            break;

        case 3:
            line("Question: %s * %s", $num1, $num2);
            $correctAnswer = $num1 * $num2;
            $answer = prompt('Your answer ');
            if ($num1 * $num2 == $answer) {
                line('Correct!');
            } else {
                line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $correctAnswer);
                line("Let's try again, %s!", $name);
                return true;
            }
            break;
    }
}

function questionGcd($name)
{
    $randomNum1 = mt_rand(1, 100);
    $randomNum2 = mt_rand(1, 100);

    line('Question: %s  %s', $randomNum1, $randomNum2);
    $correctAnswer = GCD($randomNum1, $randomNum2);
    $answer = prompt('Your answer ');
    if ($correctAnswer == $answer) {
        line('Correct!');
    } else {
        line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $correctAnswer);
        line("Let's try again, %s!", $name);
        return true;
    }
}

function GCD($num1, $num2) {

   while ($num2 != 0){
     $t = $num1 % $num2;
     $num1 = $num2;
     $num2 = $t;
   }
   return $num1;
}
