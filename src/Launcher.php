<?php

namespace Brain\Cli;

use function cli\line;
use function cli\prompt;
use function Brain\Cli\greeting;
use function Brain\Cli\askQuestion;
use function Brain\Cli\checkAnswer;
use function Brain\Cli\evenGame;
use function Brain\Cli\calcGame;
use function Brain\Cli\gcdcGame;
use function Brain\Cli\progressionGame;
use function Brain\Cli\primeGame;

function launch($gameTitle)
{
    $name = greeting();

    $dict = [
        'Even' => fn() => evenGame(),
        'Calc' => fn() => calcGame(),
        'Gcd' => fn() => gcdGame(),
        'Progression' => fn() => progressionGame(),
        'Prime' => fn() => primeGame(),
    ];

    $game = $dict[$gameTitle]();
    $rules = $game['rules'];
    $set = $game['set'];

    line($rules);

    foreach ($set as [$question, $rightAnswer]) {
        $answer = askQuestion($question);
        $result = checkAnswer($rightAnswer, $answer, $name);
        if (!$result) {
            return;
        }
    }

    line('Congratulations, %s!', $name);
}
