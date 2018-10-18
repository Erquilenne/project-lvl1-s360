<?php

namespace BrainGames\Even;

use function BrainGames\logic\game;

function run_even()
{
    $description = "Answer \"yes\" if number even otherwise answer \"no\".\n";

    $getQuestionAndCorrectAnswer = function () {
        $question = mt_rand(1, 999);
        $correctAnswer = isEven($question) ? 'yes' : 'no';
        $question = "{$question}";
        return [$question, $correctAnswer];
    };
    game($description, $getQuestionAndCorrectAnswer);
}


function isEven($question)
{
    return $question % 2 === 0;
}
