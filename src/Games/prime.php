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
    for ($i = 0; $i < $questionsCount; $i++) {
        $question = rand(0, 100);
        $rightAnswer = isPrime($question) ? 'yes' : 'no';

        $gameSet['set'][] = [$question, $rightAnswer];
    }

    return $gameSet;
}
