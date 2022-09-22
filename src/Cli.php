<?php

namespace Brain\Cli;

use function cli\line;
use function cli\prompt;

function greeting()
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    return $name;
}

function checkAnswer(int|string $rightAnswer, int|string $answer, string $name)
{
    if ($answer == $rightAnswer) {
        line('Correct!');
        return true;
    } else {
        line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $rightAnswer);
        line('Let\'s try again, %s!', $name);
        return false;
    }
}

function askQuestion(string $question)
{
    line("Question: %s", $question);
    $answer = prompt('Your answer');

    return $answer;
}
