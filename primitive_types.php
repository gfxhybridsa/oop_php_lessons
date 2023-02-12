<?php

require_once 'type_hinting.php';

$song = new Song('Blackbird',123);

print $song->name . PHP_EOL;
print $song->numberOfPlays . PHP_EOL;