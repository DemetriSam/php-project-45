<?php

namespace Brain\Cli;

use function cli\line;
use function cli\prompt;

function askName()
{
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    return $name;
}

function checkAnswer($rightAnswer, $answer, $name)
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

function askQuestion($question)
{
    line("Question: %s", $question);
    $answer = prompt('Your answer');

    return $answer;
}

function gcd($a, $b)
{
    $r = $a % $b;

    if ($r === 0) {
        return $b;
    }

    return gcd($b, $r);
}

function isPrime(int $number)
{
    if ($number === 0 or $number === 1) {
        return false;
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }

    return true;
}
