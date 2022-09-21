<?php

namespace Brain\Cli;

use function cli\line;
use function cli\prompt;

function gcd($a, $b)
{
    $r = $a % $b;

    if($r === 0) {
        return $b;
    }

    return gcd($b, $r);
}
