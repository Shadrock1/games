<?php

namespace BrainGames\Clieven;

use function cli\line;
use function cli\prompt;

function game()
{
    line('Welcome to Brain Games!');
    line('Answer "yes" if number even otherwise answer "no".' . PHP_EOL);
    $name = prompt('May I have your name?');
    line("Hello, {$name}!" . PHP_EOL);
    
    $rounds  = 3;
    for ($roundOne = 0; $roundOne < $rounds; $roundOne++){
        $rand = rand(1, 100);
        line('Question:' . $rand);
        $answer = cliEven($rand) ? 'yes' : 'no';
        $human = prompt('Your answer');

        if ($human === $answer) {
            line('Correct!');
        } else {
            line("'{$name}' is glupishka. correct answer was '{$answer}'.");
            line("Пробуй еще, {$name}" . PHP_EOL);
            return; 
        }
    }

    line("Congratulations, {$name}");

}
function cliEven($number)
{
    return $number % 2 === 0;
}