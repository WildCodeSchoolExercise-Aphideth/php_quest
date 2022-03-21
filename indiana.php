<?php
$indianaMovies['Raiders of the lorst Ark'] = 1981;
$indianaMovies['Indiana Jones and the Last Crusade']= 1989;
$indianaMovies['Indiana Jones and the Kingdom of the Crystal Skull'] = 2008;

arsort($indianaMovies);

foreach ($indianaMovies as $key => $movie){
    echo $movie. ' - ';
    echo $key. '<br/>';
}
?>