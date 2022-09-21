<?php

namespace Brain\Cli;

use function cli\line;
use function cli\prompt;


function checkAnswer($rightAnswer, $answer, $name)
{
    if ($answer === $rightAnswer) {
        line('Correct!');
        return true;
    } else {
        line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $rightAnswer);
        line('Let\'s try again, %s!', $name);
        return false;
    }
}

function askQuestion($question)
{
    line("Question: %s", $question);
    $answer = prompt('Your answer');

    return $answer;
}