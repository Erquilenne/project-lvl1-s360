<?php
namespace BrainGames\Calc;

use function BrainGames\logic\game;

const DESCRIPTION = 'What is the result of the expression?';
const OPERAND_ARRAY = ['+', '-', '*'];

function run_calc()
{
    $getQuestionAndCorrectAnswer = function () {

        $integer1 = mt_rand(1, 20);
        $integer2 = mt_rand(1, 20);
        $numberOfOperand = mt_rand(0, 2);
        $operand = OPERAND_ARRAY[$numberOfOperand];
        $question = "{$integer1} {$operand} {$integer2}";

        switch ($operand) {
            case '+':
                $correctAnswer = $integer1 + $integer2;
                break;
            case '-':
                $correctAnswer = $integer1 - $integer2;
                break;
            case '*':
                $correctAnswer = $integer1 * $integer2;
                break;
        }
        $question = "{$integer1} {$operand} {$integer2}";
        return [$question, (string)$correctAnswer];
    };

    game(DESCRIPTION, $getQuestionAndCorrectAnswer);
}
