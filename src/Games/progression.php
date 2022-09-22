<?php

namespace Brain\Cli;

use function Brain\Cli\isPrime;

function progressionGame()
{
    $gameSet = [
        'rules' => 'What number is missing in the progression?',
        'set' => [],
    ];

    $questionsCount = 3;
    $startRange = [0, 10];
    $stepRange = [0, 20];
    $lengthOfSequence = 10;

    for ($i = 0; $i < $questionsCount; $i++) {
        $start = rand(...$startRange);
        $step = rand(...$startRange);

        for ($x = 0; $x < $lengthOfSequence; $x++) {
            $sequence[$x] = $start + $x * $step;
        }

        $missingValueIndex = rand(0, $lengthOfSequence - 1);
        $rightAnswer = $sequence[$missingValueIndex];
        $sequence[$missingValueIndex] = '..';
        $question = implode(' ', $sequence);

        $gameSet['set'][] = [$question, $rightAnswer];
    }

    return $gameSet;
}