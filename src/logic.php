<?php

namespace BrainGames\logic;

use function \cli\line;
use function \cli\prompt;

function questionEven($name)
{
    $number = mt_rand(1, 999);
    $isEven = false;
    $yes = 'yes';
    $no = 'no';
    $correctAnswer = $number % 2 === 0 ? 'yes' : 'no';
    if ($number % 2 === 0) {
        $isEven = true;
    }
    line('Question: %s', $number);
    $answer = prompt('Your answer ');

    if ($isEven === true && $answer === $yes) {
        line('Correct!');
        $correctAnswer = $yes;
    } elseif ($isEven === false && $answer === $no) {
        line('Correct!');
        $correctAnswer = $no;
    } else {
        line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $correctAnswer);
        line("Let's try again, %s!", $name);
        return true;
    }
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
