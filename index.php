<?php

class Character {
  function __construct(string $name, string $phrase1, string $phrase2) {
    $this->name = $name;
    $this->phrase1 = $phrase1;
    $this->phrase2 = $phrase2;
    $this->level = 0;
  }

  function speak(int $phraseNum) {
    echo ($this->{"phrase$phraseNum"});
  }

  function setLevel(int $newLevel) {
    $this->level = $newLevel;
    echo("$this->name's level has changed to $newLevel");
  }
}

$kungFuPanda = new Character('Kung Fu Panda', 'Skadoosh!', 'You have been blinded by pure awesomeness!');
$spiderman = new Character('Spiderman', 'My Spider-Sense is tingling...', 'Your friendly neighbourhood spiderman!');

$kungFuPanda->speak(1);
echo('<br>');

$spiderman->setLevel(2);
echo('<br>');

$spiderman->speak(2);