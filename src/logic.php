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

function questionGcd()
{
    $randomNum1 = mt_rand(1, 100);
    $randomNum2 = mt_rand(1, 100);

    line('Question: %s  %s', $randomNum1, $randomNum2);
    $divisor = isDivisor($randomNum1, $randomNum2);
    $answer = prompt('Your answer ');
    if ($divisor == $answer) {
        line('Correct!');
    } else {
        line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $divisor);
        line("Let's try again, %s!", $name);
        return true;

}
function isDivisor($randomNum1, $randomNum2)
{
    $divisor1 = 0;
    $divisor2 = 0;
    $divisor = 0;
    for ($i = 1; $i < $randomNum1; $i++){
        if($randomNum1 % $i === 0){
            $divisor1 = $i;
        }
        for($i = 1; $i < $randomNum2; $i++){
            if($randomNum2 % $i === 0){
                $divisor2 = $i;
                $divisor = ($divisor1 === $divisor2) ? $divisor1 : $divisor;
            }
        }
    }
    return $divisor;
}
