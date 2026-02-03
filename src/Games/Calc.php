<?php

namespace BrainGames\Games\Calc;

use Exception;
use function BrainGames\Engine\runGame;

const DESCRIPTION = 'What is the result of the expression?';
const OPERATORS = ['+', '-', '*'];

function run(): void
{
    runGame(DESCRIPTION, function () {
        $num1 = rand(1, 20);
        $num2 = rand(1, 20);
        $randIndexOperators = rand(0, 2);
        $operator = OPERATORS[$randIndexOperators];

        $question = "$num1 $operator $num2";
        $correctAnswer = (string) calculate($num1, $num2, $operator);

        return [$question, $correctAnswer];
    });
}

function calculate(int $num1, int $num2, string $operator): int
{
    return match ($operator) {
        '+' => $num1 + $num2,
        '-' => $num1 - $num2,
        '*' => $num1 * $num2,
        default => throw new Exception("Unknown operator: $operator"),
    };
}
