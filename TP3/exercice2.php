<?php

include "function.php";


if (isset($_COOKIE['pseudo'])){
    
    header('location: autoReco.php');

}

?>

<form action="autoReco.php" method="post">

<input type="text" placeholder="nom" name="nom">
<input type="submit" value="envoyer">

<br><br>

<input type="checkbox" name="memo" id="" value="memorisation"> Mémoriser mes informations

</form>
