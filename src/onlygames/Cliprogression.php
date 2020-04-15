<?php

namespace BrainGames\Cliprogression;

use function BrainGames\kingfile\king;

const TASK = 'What number is missing in the progression?';

function progress()
{
    $gameData = function (){
        $rand = rand(1, 100);
        $rand1 = rand(1, 10);
        $num = 10;
        $endNumber = $rand + $rand1 * ($num - 1);
        $mass = range($rand, $endNumber, $rand1);
        $answer = implode(array_splice($mass, $rand1 -1, 1, '..'));
        $question = implode(' ', $mass);
        return [$question, $answer];
    };
    king(TASK, $gameData);
}

