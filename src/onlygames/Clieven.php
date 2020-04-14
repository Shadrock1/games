<?php

namespace BrainGames\Clieven;

use function BrainGames\kingfile\king;

const TASK ='Answer "yes" if number even otherwise answer "no".' . PHP_EOL;

function game()
{
   $gameData = function(){
        $question = rand(1, 100);
        $answer = cliEven($question) ? 'yes' : 'no';
        return [$question, $answer];
    };
    king(TASK, $gameData);
    
}

function cliEven($number)
{
    return $number % 2 === 0;
}
