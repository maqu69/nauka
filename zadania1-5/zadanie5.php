<?php



$dozwolone = ['paper', 'rock', 'scissors'];

function rockpaperscissors($player1, $player2)
{
    if (in_array($player1, $dozwolone)) && (in_array($player2, $dozwolone)){
        if ($player1 == $player2) {
            return 'draw';
        }

        switch ($player1) {
            case 'paper':
                return ($player2 == 'scissors') ? 'player 2 wins!' : 'player 1 wins!';
        }

            case 'scissors': {
    return ($player2 == 'rock') ? 'player 2 wins!' : 'player 1 wins!';
}


            case 'rock': {
    return ($player2 == 'paper') ? 'player 2 wins' : 'player 1 wins!';
}

                    }



}
    else return 'wrong input';



echo rockpaperscissors(paper, rock );


