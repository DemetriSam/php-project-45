<?php

namespace Brain\Cli;

const PRIME_RULES = 'Answer "yes" if given number is prime. Otherwise answer "no".';
const PRIME_RANGE = [0, 100];

function primeGame()
{
    $rounds = [];

    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $question = rand(...PRIME_RANGE);
        $rightAnswer = isPrime($question) ? 'yes' : 'no';

        $rounds[] = [$question, $rightAnswer];
    }

    return launch(PRIME_RULES, $rounds);
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