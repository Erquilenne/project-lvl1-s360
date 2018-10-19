<?php

namespace BrainGames\Prime;

use function BrainGames\logic\game;

const DESCRIPTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function run_prime()
{
    $getQuestionAndCorrectAnswer = function () {
        $integer = mt_rand(2, 99);
        (string)$question = $integer;
        $correctAnswer = isPrime($integer) ? 'yes' : 'no';
        return [$question, $correctAnswer];
    };

    game(DESCRIPTION, $getQuestionAndCorrectAnswer);
}

function isPrime($integer)
{
    $countOfDivisors = 0;
    for ($i = 1; $i <= $integer; $i++) {
        if ($integer % $i === 0) {
            $countOfDivisors++;
        }
    }
    return ($countOfDivisors <= 2);
}
