<?php
namespace rusjkh\hangman\Controller;
use function rusjkh\hangman\View\showGame;

function startGame(){
   echo "Game started" .PHP_EOL;
   showGame();
}
?>