<?php

namespace Brain\Cli;

use function cli\line;
use function cli\prompt;
use function Brain\Cli\greeting;
use function Brain\Cli\askQuestion;

function launch(string $rules, array $rounds)
{
    $name = greeting();

    line($rules);

    foreach ($rounds as [$question, $rightAnswer]) {
        $answer = askQuestion($question);
        $result = $answer == $rightAnswer;
        if (!$result) {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $rightAnswer);
            line('Let\'s try again, %s!', $name);
            return;
        }

        line('Correct!');
    }

    line('Congratulations, %s!', $name);
}
