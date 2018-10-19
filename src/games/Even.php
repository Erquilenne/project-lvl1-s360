<?php

namespace BrainGames\Even;

use function BrainGames\logic\game;

const DESCRIPTION = 'Answer "yes" if number even otherwise answer "no".';

function run_even()
{
    $getQuestionAndCorrectAnswer = function () {
        $question = mt_rand(1, 999);
        $correctAnswer = isEven($question) ? 'yes' : 'no';
        $question = "{$question}";
        return [$question, $correctAnswer];
    };
    game(DESCRIPTION, $getQuestionAndCorrectAnswer);
}

function isEven($question)
{
    return $question % 2 === 0;
}
