<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function welcomeAndGreet(): string
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    return $name;
}

function runGame(string $description, callable $getQuestionAndAnswer): void
{
    $name = welcomeAndGreet();

    line($description);

    for ($i = 0; $i < 3; $i++) {
        [$question, $correctAnswer] = $getQuestionAndAnswer();

        line("Question: %s", $question);
        $userAnswer = prompt('Your answer');

        if ($userAnswer !== $correctAnswer) {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $userAnswer, $correctAnswer);
            line("Let's try again, %s!", $name);
            return;
        }

        line('Correct!');
    }

    line("Congratulations, %s!", $name);
}
