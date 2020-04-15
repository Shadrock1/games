<?php

namespace BrainGames\Cliprime;

use function BrainGames\kingfile\king;

const TASK = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function prime()
{
    $gameData = function(){
        $rand = rand(1, 100);
        $question = $rand;
        $answer = gmp($rand) ? 'yes' : 'no';
        return [$question, $answer];
    };
    king(TASK, $gameData);
}

function gmp($number){
    
    if ($number == 1)
     return false;
    for ($d = 2; $d * $d <= $number; $d++){
        if ($number % $d == 0)
        return false;
    }
    return true;
}