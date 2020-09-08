<form method="post">
    <label>Pseudo :</label>
    <input type="text" name="pseudo">
    <input type="submit" value="Envoyer">
</form>

On peut insérer des balises script ou html.

<?php

if(isset($_POST['pseudo'])){

    echo "Bonjour ".htmlspecialchars($_POST['pseudo']);

}