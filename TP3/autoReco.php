<?php


session_start();


if (isset ($_POST["memo"])){

    $temps = 2*60;

    setcookie ("pseudo", $_POST["nom"],time()+ $temps);

    echo $_POST["nom"];
    

    $_SESSION["logged"]=true;

}else{

    setcookie ("pseudo",time() - 2*60);

}


if (isset ($_COOKIE["pseudo"])){

    echo $_COOKIE["pseudo"];
}



?>

<a href="exercice2.php"><input type="button" value="retour"></a>