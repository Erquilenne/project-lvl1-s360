<?php
namespace BrainGames\Calc;

use function BrainGames\logic\game;

function run_calc()
{
    $description = 'What is the result of the expression?';
    $getQuestionAndCorrectAnswer = function () {
        $integer1 = mt_rand(1, 20);
        $integer2 = mt_rand(1, 20);
        $operandArray = ['+', '-', '*'];
        $numberOfOperand = mt_rand(0, 2);
        $operand = $operandArray[$numberOfOperand];
        $answerArray = [
            $integer1 + $integer2,
            $integer1 - $integer2,
            $integer1 * $integer2
        ];
        $question = "{$integer1} {$operand} {$integer2}";
        $correctAnswer = $answerArray[$numberOfOperand];
        return [$question, $correctAnswer];
    };

    game($description, $getQuestionAndCorrectAnswer);
}
