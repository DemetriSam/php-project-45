<?php

namespace Brain\Cli;

function calcGame()
{
    $gameSet = [
        'rules' => 'What is the result of the expression?',
        'set' => [],
    ];

    $questionsCount = 3;
    $quantityOfActions = 3;
    $firstRange = [0, 99];
    $secondRange = [0, 10];

    for ($i = 0; $i < $questionsCount; $i++) {
        $action = rand(1, $quantityOfActions);
        $first = rand(...$firstRange);
        $second = rand(...$secondRange);

        switch ($action) {
            case 1:
                $question = $first . ' + ' . $second;
                $rightAnswer = $first + $second;
                break;
            case 2:
                $question = $first . ' - ' . $second;
                $rightAnswer = $first - $second;
                break;
            case 3:
                $question = $first . ' * ' . $second;
                $rightAnswer = $first * $second;
                break;
            default:
                $question = $first . ' + ' . $second;
                $rightAnswer = $first + $second;
                break;
        }
        $gameSet['set'][] = [$question, $rightAnswer];
    }

    return $gameSet;
}
