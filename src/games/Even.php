<?php

namespace BrainGames\Even;

use function BrainGames\logic\game;

const DESCRIPTION = "Answer \"yes\" if number even otherwise answer \"no\".\n";

function run_even()
{
    $description = DESCRIPTION;

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
