<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Engine\runGame;

const DESCRIPTION = 'What number is missing in the progression?';

function run(): void
{
    runGame(DESCRIPTION, function () {
        $start = random_int(1, 20);
        $step = random_int(2, 5);
        $hiddenPosition = random_int(0, 9);

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
