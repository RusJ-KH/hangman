<?php

namespace rusjkh\hangman\Controller;

use function rusjkh\hangman\View\showGame;
use function rusjkh\hangman\View\showList;
use function rusjkh\hangman\View\showReplay;
use function rusjkh\hangman\View\help;

function key($key)
{
    if ($key == "--new" || $key == "-n") {
        startGame();
    } elseif ($key == "--list" || $key == "-l") {
        showList();
    } elseif ($key == "--replay" || $key == "-r") {
        showReplay();
    } elseif ($key == "--help" || $key == "-h") {
        help();
    } else {
        echo "Ключ отсутствует.";
    }
}

function startGame()
{
    $words = array("string", "letter", "artist", "arrive", "public");
    $playWord = $words[array_rand($words)];
    $remainingLetters = substr($playWord, 1, -1);
    $maxAnswers = strlen($remainingLetters);
    $maxFaults = 6;

    $progress = "______";
    $progress[0] = $playWord[0];
    $progress[-1] = $playWord[-1];

    $faultCount = 0;
    $answersCount = 0;

    do {
        showGame($faultCount, $progress);
        $letter = mb_strtolower(\cli\prompt("Буква"));
        $tempCount = 0;

        for ($i = 0; $i < strlen($remainingLetters); $i++) {
            if ($remainingLetters[$i] == $letter) {
                $progress[$i + 1] = $letter;
                $remainingLetters[$i] = " ";
                $answersCount++;
                $tempCount++;
            }
        }

        if ($tempCount == 0) {
            $faultCount++;
        }
    } while ($faultCount < $maxFaults && $answersCount < $maxAnswers);
    showGame($faultCount, $progress);
    showResult($answersCount, $playWord);
}

function showResult($answersCount, $playWord)
{
    if ($answersCount == 4) {
        \cli\line("Вы победили!");
    } else {
        \cli\line("\nВы проиграли...");
    }
    \cli\line("\nСловом, которое вам предстояло отгадать, было: $playWord\n");
}
