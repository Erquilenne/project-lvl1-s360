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
    $questionInteger1 = mt_rand(1, 20);
    $questionInteger2 = mt_rand(1, 20);
    $operandArray = ['+', '-', '*'];
    $numberOfOperand = mt_rand(0,2);
    $operand = $operandArray[$numberOfOperand];
    $answerArray = [$questionInteger1 + $questionInteger2,
     $questionInteger1 - $questionInteger2, $questionInteger1 * $questionInteger2];
    $correctAnswer = $answerArray[$numberOfOperand];

    line("Question: %s %s %s", $questionInteger1, $operand, $questionInteger2);
    $answer = prompt('Your answer ');
    if($answer == $correctAnswer){
      line('Correct!');
      } else {
      line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $correctAnswer);
      line("Let's try again, %s!", $name);
        return true;
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
