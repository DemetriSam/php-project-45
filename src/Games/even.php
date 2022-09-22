<?php

namespace Brain\Cli;

function evenGame()
{
    $gameSet = [
        'rules' => 'Answer "yes" if the number is even, otherwise answer "no".',
        'set' => [],
    ];

    $questionsCount = 3;
    $range = [0, 100];

    for ($i = 0; $i < $questionsCount; $i++) {
        $question = rand(...$range);
        $isEven = $question % 2 ? false : true;
        $rightAnswer = $isEven ? 'yes' : 'no';

        $gameSet['set'][] = [$question, $rightAnswer];
    }

    return $gameSet;
}
