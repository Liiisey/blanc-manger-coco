<?php

session_start();
require "../conf/bdd.php";

if (!empty($_POST["login"]) && !empty($_POST["email"]))
{
    $form = true;
    $sql = "SELECT * FROM user WHERE login =:login AND email =:email";
    $statement = $dbh->prepare($sql);
    $statement->bindParam(":login",$_POST["login"]);
    $statement->bindParam(":email",$_POST["email"]);
    $resultat = $statement->execute();

    if ($resultat) {
        $data = $statement->fetch();
    } else {
        echo "Erreur de serveur.";
    }

    if( $data !== false)
    {
        if( password_verify( $_POST["pwd"], $data["password"] ))
        {
            $_SESSION["userConnected"] = $data;
            $_SESSION["isConnected"] = true;
            header("Location: ../index.php?form=ok");
        } else
            {
            echo"Erreur de mot de passe.";
        }

    }
    else {
        echo"Aucun utilisateur ne correspond.";
    }
} else
{

}