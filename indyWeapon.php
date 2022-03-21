<?php
$weapons = ['fists', 'whip', 'gun'];
$opponentWeapon = $weapons[rand(0,2)]; // Cela permet de choisir une arme de manière aléatoire.

switch ($opponentWeapon) {
  case 'fists':
    $indyWeapon = 'gun';
    break;
  case 'whip':
      $indyWeapon = 'fists';
      break;
  case 'gun':
      $indyWeapon = 'whip';
      break;
  default:
      $indyWeapon = 'no ennemy';
}
      
echo ('opponent weapon : '. $opponentWeapon. PHP_EOL);
echo ('indy weapon : '. $indyWeapon);
?>
