<?php

function writeSecretSentence (string $animal, string $element): string
{
  return "$animal s'incline face à $element";
}

echo writeSecretSentence( "le chat", "la terre");
echo writeSecretSentence( "le dragon", "l'eau");
echo writeSecretSentence( "le singe", "l'air");
?>