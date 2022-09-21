<?php

namespace Brain\Cli;

use function Brain\Cli\gcd;

function evenGame()
{   
    $gameSet = [
        'rules' => 'Answer "yes" if the number is even, otherwise answer "no".',
        'set' => [],
    ];

    $questionsCount = 3;
    for($i = 0; $i < $questionsCount; $i++) {
        $question = rand(0, 100);
        $isEven = !($question % 2);
        $rightAnswer = $isEven ? 'yes' : 'no';
        
        $gameSet['set'][] = [$question, $rightAnswer];
    }
    
    return $gameSet;
}

function calcGame()
{   
    $gameSet = [
        'rules' => 'What is the result of the expression?',
        'set' => [],
    ];

    $questionsCount = 3;
    for($i = 0; $i < $questionsCount; $i++) {
        $action = rand(0, 2);
        $first = rand(0, 99);
        $second = rand(0, 10);

        switch ($action) {
            case 0:
                $question = $first . '+' . $second;
                $rightAnswer = $first + $second;
                break;
            case 1:
                $question = $first . '-' . $second;
                $rightAnswer = $first - $second;
                break;
            case 2:
                $question = $first . '*' . $second;
                $rightAnswer = $first * $second;
                break; 
            default:
                break;
        }
        $gameSet['set'][] = [$question, $rightAnswer];
    }
    
    return $gameSet;
}

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