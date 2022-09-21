<?php

namespace Brain\Cli;

function evenGame()
{
    $gameSet = [
        'rules' => 'Answer "yes" if the number is even, otherwise answer "no".',
        'set' => [],
    ];

    $questionsCount = 3;
    for ($i = 0; $i < $questionsCount; $i++) {
        $question = rand(0, 100);
        $isEven = !($question % 2);
        $rightAnswer = $isEven ? 'yes' : 'no';

        $gameSet['set'][] = [$question, $rightAnswer];
    }

    return $gameSet;
}
