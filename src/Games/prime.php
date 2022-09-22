<?php

namespace Brain\Cli;

use function Brain\Cli\isPrime;

function primeGame()
{
    $gameSet = [
        'rules' => 'Answer "yes" if given number is prime. Otherwise answer "no".',
        'set' => [],
    ];

    $questionsCount = 3;
    $range = [0, 100];
    for ($i = 0; $i < $questionsCount; $i++) {
        $question = rand(...$range);
        $rightAnswer = isPrime($question) ? 'yes' : 'no';

        $gameSet['set'][] = [$question, $rightAnswer];
    }

    return $gameSet;
}
