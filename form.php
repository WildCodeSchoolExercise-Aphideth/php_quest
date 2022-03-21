<form action="form.php" method="post">
     <div>
         <label for="nom">Nom :</label>
         <input type="text" id="nom" name="user_name" value="RICHARD valeur pré-remplie">
     </div>
     <div>
         <label for="courriel">Courriel :</label>
         <input type="email" id="courriel" name="user_email" placeholder="xxx@email.com suggérée">
     </div>
     <div>
         <label for="message">Message :</label>
         <textarea id="message" name="user_message"></textarea>
     </div>
     <div class="button">
         <button type="submit">Envoyer votre message</button>
     </div>
 </form>

<?php
    var_dump($_POST);
?>
 <!--
 <?php
    echo  $_GET['user_name'] . PHP_EOL;

    echo  $_GET['user_message'];
    ?> 

-->