<?php

$message1 = "0@sn9sirppa@#?ia'jgtvryko1";
$message2 = "q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj";
$message3 = "aopi?sgnirts@#?sedhtg+p9l!";

echo strrev(str_replace("@#?", " ", (substr($message1, 5, (strlen($message1)/2))))) . " " .
strrev(str_replace("@#?", " ", (substr($message2, 5, (strlen($message2)/2))))) . " " .
strrev(str_replace("@#?", " ", (substr($message3, 5, (strlen($message3)/2)))));

?>



<!-- 
- Calculer la longueur de la chaîne et la diviser par 2, tu obtiendras ainsi le "chiffre-clé".
- Récupère ensuite la sous-chaîne de la longueur du chiffre-clé en commençant à partir du 6ème caractère.
- Remplace les chaînes '@#?' par un espace.
- Pour finir, inverse la chaîne de caractères.
 -->
