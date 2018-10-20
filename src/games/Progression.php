<?php
namespace BrainGames\Progression;

use function BrainGames\logic\game;

const DESCRIPTION = 'What number is missing in this progression?';
const LENGTH_OF_PROGRESSION = 10;

function run_progression()
{
    $getQuestionAndCorrectAnswer = function () {
        $step = mt_rand(2, 30);
        $startStep = $step;
        $hiddenElementPosition = mt_rand(0, 9);
        $progressionArray = [];
        for ($i = 0; $i < LENGTH_OF_PROGRESSION; $i++) {
            $progressionArray[] = $startStep + $step * $i;
        }
        $correctAnswer = $progressionArray[$hiddenElementPosition];
        $progressionArray[$hiddenElementPosition] = '..';
        $question = implode(' ', $progressionArray);
        return[$question, (string)$correctAnswer];
    };
    game(DESCRIPTION, $getQuestionAndCorrectAnswer);
}
