<?php

namespace Brain\Games;

const GCD_RULES = 'Find the greatest common divisor of given numbers.';
const GCD_RANGE = [1, 99];

function gcdGame()
{
    $rounds = [];

    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $first = rand(...GCD_RANGE);
        $second = rand(...GCD_RANGE);

        $question = "{$first} {$second}";
        $rightAnswer = gcd($first, $second);

        $rounds[] = [$question, $rightAnswer];
    }

    return launch(GCD_RULES, $rounds);
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
