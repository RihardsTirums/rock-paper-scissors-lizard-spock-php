<?php

require_once "Element.php";
require_once "Game.php";
$rock = new Element("ROCK");
$paper = new Element("PAPER");
$scissors = new Element("SCISSORS");
// Adding Lizard and Spock Elements
$lizard = new Element("LIZARD");
$spock = new Element("SPOCK");

//What element beats what
$rock->setBeats($scissors); // Lizard
$rock->setSecondElement($lizard);

$paper->setBeats($rock); // Spock
$paper->setSecondElement($spock);

$scissors->setBeats($paper); // Lizard
$scissors->setSecondElement($lizard);
// Adding Lizard and Spock Elements
$lizard->setBeats($paper);
$lizard->setSecondElement($spock);

$spock->setBeats($scissors);
$spock->setSecondElement($rock);


$elements = [
    $rock,
    $paper,
    $scissors,
    $lizard,
    $spock,

];

foreach ($elements as $key => $element){
    echo "[{$key}] {$element->getName()}" . PHP_EOL;
}
echo "Select you're element: ";
$selection = (int) readline("Enter selection:");

$selectedElement = $elements[$selection];
$opponentElement = $elements[array_rand($elements)];

$game = new Game($selectedElement,$opponentElement);
$winner = $game->getWinner();

echo "{$selectedElement->getName()} VS {$opponentElement->getName()}";

if ($winner === null){
    echo PHP_EOL;
    echo "The Game was Tie!";
    exit;
}
echo PHP_EOL;
echo "Winner is: " . $winner->getName();