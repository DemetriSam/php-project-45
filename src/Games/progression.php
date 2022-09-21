<?php

namespace Brain\Cli;

function progressionGame()
{   
    $gameSet = [
        'rules' => 'What number is missing in the progression?',
        'set' => [],
    ];

    $questionsCount = 3;
    for($i = 0; $i < $questionsCount; $i++) {
        $start = rand(0, 10);
        $step = rand(0,20);
        $length = 10;


        for ($x = 0; $x < 10; $x++) {
            $sequence[$x] = $start + $x * $step; 
        }

        $missingValueIndex = rand(0, $length);
        $rightAnswer = $sequence[$missingValueIndex];
        $sequence[$missingValueIndex] = '..';
        $question = implode(' ', $sequence);

        $gameSet['set'][] = [$question, $rightAnswer];
    }
    
    return $gameSet;
}