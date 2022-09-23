<?php

namespace Brain\Cli;

use function Brain\Cli\launch;

const RULES = 'What is the result of the expression?';
const RANGE_OF_FIRST_NUMBER = [0, 99];
const RANGE_OF_SECOND_NUMBER = [0, 10];
const ACTIONS = ['+', '-', '*'];
const ROUNDS_COUNT = 3;

function calcGame()
{
    $rounds = [];

    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $first = rand(...RANGE_OF_FIRST_NUMBER);
        $second = rand(...RANGE_OF_SECOND_NUMBER);

        [$question, $rightAnswer] = getRandomAction($first, $second);

        $rounds[] = [$question, $rightAnswer];
    }

    launch(RULES, $rounds);
}

function getRandomAction(int $first, int $second)
{
    $quantityOfActions = 3;
    $operator = array_rand(ACTIONS);
    $question = implode(' ', [$first, $operator, $second]);

    switch ($operator) {
        case '+':
            $rightAnswer = $first + $second;
            break;
        case '-':
            $rightAnswer = $first - $second;
            break;
        case '*':
            $rightAnswer = $first * $second;
            break;
        default:
            $question = $first . ' + ' . $second;
            $rightAnswer = $first + $second;
            break;
    }

    return [$question, $rightAnswer];
}
