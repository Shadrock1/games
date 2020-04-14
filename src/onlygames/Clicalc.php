<?php

namespace BrainGames\Clicalc;

use function BrainGames\kingfile\king;

const TASK = 'What is the result of the expression?';
const SIGNS = ['+', '-', '*'];

function calc()
{
    $gameData = function (){
        $rand = rand(1, 100);
        $rand1 = rand(1, 100);
        $arryrand = SIGNS[array_rand(SIGNS)];
        $answer = (string)(calculate($rand, $arryrand, $rand1));
        $question = "{$rand} {$arryrand} {$rand1}";
        return [$question, $answer];
    };
    king(TASK, $gameData);
}

function calculate($rand, $arryrand, $rand1){
    switch ($arryrand){
        case '+':
            return $rand + $rand1;
            break;
        case '-':
            return $rand - $rand1;
            break;
        case '*':
            return $rand * $rand1;
            break;
    }
        
}