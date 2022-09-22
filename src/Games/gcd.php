<?php

namespace Brain\Cli;

use function Brain\Cli\gcd;

function gcdGame()
{
    $gameSet = [
        'rules' => 'What is the result of the expression?',
        'set' => [],
    ];

    $questionsCount = 3;
    $range = [0, 99];
    
    for ($i = 0; $i < $questionsCount; $i++) {
        $first = rand(...$range);
        $second = rand(...$range);

        $question = $first . ' ' . $second;
        $rightAnswer = gcd($first, $second);

        $gameSet['set'][] = [$question, $rightAnswer];
    }

    return $gameSet;
}
