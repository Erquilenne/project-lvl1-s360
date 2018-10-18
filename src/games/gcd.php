<?php

namespace BrainGames\GCD;

use function BrainGames\logic\game;

function run_gcd()
{
    $description = "Find the greatest common divisor of given numbers.\n";
    $getQuestionAndCorrectAnswer = function () {
        $number1 = mt_rand(1, 100);
        $number2 = mt_rand(1, 100);

        $question = "{$number1} {$number2}";
        $correctAnswer = GCD($number1, $number2);

        return [$question, $correctAnswer];
    };


    game($description, $getQuestionAndCorrectAnswer);
}

function GCD($num1, $num2)
{
    while ($num2 != 0) {
        $t = $num1 % $num2;
        $num1 = $num2;
        $num2 = $t;
    }
    return $num1;
}
