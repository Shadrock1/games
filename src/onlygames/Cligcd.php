<?php

namespace BrainGames\Cligcd;

use function BrainGames\kingfile\king;

const TASK ='Find the greatest common divisor of given numbers.';

function gcd()
{
    $gameData = function(){
        $rand = rand(1, 100);
        $rand1 = rand(1, 100);
        $question =  "{$rand} {$rand1}";
        $answer = (string)gmpgcd($rand, $rand1);
        return [$question, $answer];
    };
    king(TASK, $gameData);

}

function gmpgcd($rand, $rand1){
    return ($rand % $rand1) ? gmpgcd($rand1, $rand % $rand1) : $rand1;
}