<?php

namespace BrainGames\Balance;

use function BrainGames\logic\game;

const DESCRIPTION = 'Balance the given number.';

function run_balance()
{
    $getQuestionAndCorrectAnswer = function () {
        $integer = mt_rand(111, 9999);
        $question = $integer;
        $integerArray = str_split($integer);
        $size = sizeof($integerArray);
        $correctAnswer = calculateBalance($size, $integerArray);
        return [$question, $correctAnswer];
    };
    game(DESCRIPTION, $getQuestionAndCorrectAnswer);
}

function calculateBalance($size, $integerArray)
{
    $integerSumm = 0;
    for ($i = 0; $i < $size; $i++) {
        $integerSumm += $integerArray[$i];
    }
    $baseInteger = floor($integerSumm / $size);
    $remain = $integerSumm % $size;

    $balanceWithoutRemain = [];
    for ($i = 0; $i < $size; $i++) {
        $balanceWithoutRemain[] = $baseInteger;
    }
    if ($remain !== 0) {
        for ($i = 0; $i < $remain; $i++) {
            $balanceWithoutRemain[$i]++;
        }
    }
    $correctAnswer = implode('', array_reverse($balanceWithoutRemain));

    return $correctAnswer;
}
