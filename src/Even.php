<?php

namespace Brain\Cli;

use function cli\line;
use function cli\prompt;

function startEvenGame()
{
    line('Welcome to the Brain Games');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('Answer "yes" if the number is even, otherwise answer "no".');

    $questionsCoutn = 3;
    
    for($i = 0; $i < $questionsCoutn; $i++) {
        $number = rand(0, 100);
        $isEven = !($number % 2);
        $rightAnswer = $isEven ? 'yes' : 'no';

        line("Question: %s", $number);
        $answer = prompt('Your answer');

        if ($answer === $rightAnswer) {
            line('Correct!');
        } else {
            line("%s is wrong answer ;(. Correct answer was %s.", $answer, $rightAnswer);
            line('Let\'s try again, %s!', $name);
            return;
        }
    }

    line('Congratulations, %s!', $name);

    

}
