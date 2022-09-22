<?php

namespace Brain\Cli;

use function cli\line;
use function cli\prompt;

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
