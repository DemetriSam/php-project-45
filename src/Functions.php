<?php

namespace Brain\Cli;

use function cli\line;
use function cli\prompt;

function gcd($a, $b)
{
    $r = $a % $b;

    if ($r === 0) {
        return $b;
    }

    return gcd($b, $r);
}

function isPrime($number, $div = 2)
{
    if ($number % $div && $div < $number) {
        return false;
    } elseif ($number/$div == 1) {
        return true;
    }

    return isPrime($number, $div + 1);
}