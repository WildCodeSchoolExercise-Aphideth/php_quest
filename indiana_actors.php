<?php
$movies = [
'Raiders of the lorst Ark' => ['Harrison Ford', 'Karen Allen', 'Paul Freeman'],
'Indiana Jones and the Last Crusade'=> ['Harrison Ford', 'Sean Connery', 'Alison Doody'],
'Indiana Jones and the Kingdom of the Crystal Skull' => ['Harrison Ford', 'Shia LaBeouf', 'Cate Blanchett']
];

foreach ($movies as $movie => $actors){
  echo "Dans le film $movie, les principaux acteurs sont :".PHP_EOL ;
  foreach ($actors as $actor){
    echo "- ". $actor. PHP_EOL;
  }
}
?>