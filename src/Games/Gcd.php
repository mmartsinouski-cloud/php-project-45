<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Engine\runGame;

const DESCRIPTION = 'Find the greatest common divisor of given numbers.';

function run(): void
{
    runGame(DESCRIPTION, function () {
        $num1 = random_int(1, 100);
        $num2 = random_int(1, 100);

        $question = "$num1 $num2";
        $correctAnswer = (string)gcd($num1, $num2);

        return [$question, $correctAnswer];
    });
}

function gcd(int $a, int $b): int
{
    while ($b !== 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return abs($a);
}
