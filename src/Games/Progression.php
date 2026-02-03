<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Engine\runGame;

const DESCRIPTION = 'What number is missing in the progression?';

function run(): void
{
    runGame(DESCRIPTION, function () {
        $start = rand(1, 20);
        $step = rand(2, 5);
        $hiddenPosition = rand(0, 9);

        $progression = makeProgression($start, $step, 10);
        $correctAnswer = (string) $progression[$hiddenPosition];
        $progression[$hiddenPosition] = '..';
        $question = implode(' ', $progression);

        return [$question, $correctAnswer];
    });
}

function makeProgression(int $start, int $step, int $length): array
{
    $progression = [];
    for ($i = 0; $i < $length; $i++) {
        $progression[] = $start + $i * $step;
    }
    return $progression;
}
