<?php

namespace BrainGames\Prime;

use function BrainGames\logic\game;

const DESCRIPTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function run_prime()
{
    $getQuestionAndCorrectAnswer = function () {
        $integer = mt_rand(2, 99);
        $question = (string)$integer;
        $correctAnswer = isPrime($integer) ? 'yes' : 'no';
        return [$question, $correctAnswer];
    };

    game(DESCRIPTION, $getQuestionAndCorrectAnswer);
}

function isPrime($integer)
{
    if ($integer <= 1) {
        return false;
    }

    for ($i = 2; $i <= sqrt($integer); $i++) {
        if ($integer % $i == 0) {
            return false;
        }
    }
    return true;
}
