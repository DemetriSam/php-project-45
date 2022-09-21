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
    for($i = 0; $i < $questionsCount; $i++) {
        $first = rand(0, 99);
        $second = rand(0, 99);

        $question = $first . ' ' . $second;
        $rightAnswer = gcd($first, $second);

        $gameSet['set'][] = [$question, $rightAnswer];
    }
    
    return $gameSet;
}