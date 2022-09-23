<?php

namespace Brain\Cli;

use function Brain\Cli\launch;

const EVEN_RULES = 'Answer "yes" if the number is even, otherwise answer "no".';
const EVEN_RANGE = [0, 1000];

function evenGame()
{
    $rounds = [];

    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $question = rand(...EVEN_RANGE);
        $isEven = (bool)($question % 2) ? false : true;
        $rightAnswer = $isEven ? 'yes' : 'no';

        $rounds[] = [$question, $rightAnswer];
    }

    return launch(EVEN_RULES, $rounds);
}
