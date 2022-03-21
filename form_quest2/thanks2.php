<?php
// echo  $_POST['lastname'];
// echo  $_POST['firstname'];
// echo  $_POST['email'];
// echo  $_POST['phone'];
// echo  $_POST['message'];
// echo  $_POST['object'];

echo "Merci {$_POST['firstname']} {$_POST['lastname']} de nous avoir contacté à propos de {$_POST['object']}. <br>
Un de nos conseillers vous contactera soit à l’adresse {$_POST['email']} ou par téléphone au {$_POST['phone']} dans les plus brefs délais pour traiter votre demande : {$_POST['message']}";

?>