<?php


function questionGcd($name)
{
    $questionInteger1 = mt_rand(1, 100);
    $questionInteger2 = mt_rand(1, 100);

    line('Question: %s  %s', $questionInteger1, $questionInteger2);
    $correctAnswer = GCD($questionInteger1, $questionInteger2);
    $answer = prompt('Your answer ');
    if ($correctAnswer == $answer) {
        line('Correct!');
    } else {
        line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $correctAnswer);
        line("Let's try again, %s!", $name);
        return true;
    }
}

function GCD($num1, $num2) {

   while ($num2 != 0){
     $t = $num1 % $num2;
     $num1 = $num2;
     $num2 = $t;
   }
   return $num1;
}
