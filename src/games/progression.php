<?php
namespace BrainGames\Progression;

use function BrainGames\logic\game;

const DESCRIPTION = 'What number is missing in this progression?';
const LENGTH_OF_PROGRESSION = 10;
const NUMBER_OF_WHOLE = 5;

function run_progression()
{
    $getQuestionAndCorrectAnswer = function () {
        $step = mt_rand(2, 30);
        $progressionArray = [];
        $summ = 0;
        for ($i = 0; $i < LENGTH_OF_PROGRESSION; $i++) {
            $progressionArray[] = $summ + $step;
            $summ += $step;
        }
        $correctAnswer = $progressionArray[NUMBER_OF_WHOLE];
        $progressionArray[NUMBER_OF_WHOLE] = '..';
        $question = implode(' ', $progressionArray);
        return[$question, (string)$correctAnswer];
    };
    game(DESCRIPTION, $getQuestionAndCorrectAnswer);
}
