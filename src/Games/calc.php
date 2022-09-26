<?php

namespace Brain\Games;

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
    $k = array_rand(CALC_ACTIONS);
    $operator = CALC_ACTIONS[$k];

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
            //@phpstan-ignore-line
            throw new \Exception("Not found operator: $operator!");
    }

    return [$question, $rightAnswer];
}
