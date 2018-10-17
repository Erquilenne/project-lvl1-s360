<?php

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
