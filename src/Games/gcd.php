<?php

namespace Brain\Cli;

const GCD_RULES = 'What is the result of the expression?';
const GCD_RANGE = [0, 99];

function gcdGame()
{
    $rounds = [];

    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $first = rand(...GCD_RANGE);
        $second = rand(...GCD_RANGE);

        $question = $first . ' ' . $second;
        $rightAnswer = gcd($first, $second);

        $rounds[] = [$question, $rightAnswer];
    }

    return $gameSet;
}

function gcd(int $a, int $b)
{
    if ($b === 0) {
        return $a;
    }

    $r = $a % $b;

    if ($r === 0) {
        return $b;
    }

    return gcd($b, $r);
}