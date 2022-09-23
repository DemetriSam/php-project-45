<?php

namespace Brain\Cli;

use function Brain\Cli\launch;

const CALC_RULES = 'What is the result of the expression?';
const CALC_RANGE_OF_FIRST_NUMBER = [0, 99];
const CALC_RANGE_OF_SECOND_NUMBER = [0, 10];
const CALC_ACTIONS = ['+', '-', '*'];

function calcGame()
{
    $rounds = [];

    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $first = rand(...CALC_RANGE_OF_FIRST_NUMBER);
        $second = rand(...CALC_RANGE_OF_SECOND_NUMBER);

        [$question, $rightAnswer] = getRandomAction($first, $second);

        $rounds[] = [$question, $rightAnswer];
    }

    launch(CALC_RULES, $rounds);
}

function getRandomAction(int $first, int $second)
{
    $quantityOfActions = 3;
    $operator = array_rand(CALC_ACTIONS);
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
