<?php

    session_start();
    include('../bdconnect.php');

    /**
     * Récupération du formulaire
     */

    $email = $_POST["email"];
    $password = $_POST["password"];

    /**
     * Authentification
     */

    $connexion = false; 
    $req = "select id, password, roles from user where email = '$email'";
    $curseur = mysqli_query($bdd,$req);

    if($row = mysqli_fetch_assoc($curseur)){
        $hashpass = $row["password"];
        $connexion = password_verify($password, $hashpass);


        if ($connexion) {
            /**
             * Setup de l'authentifié
             */
            $_SESSION["auth"] = true;
            $_SESSION["email"] = $email;
            $_SESSION["idUser"] = $row["id"];
            $id = $row["id"];
            $_SESSION["role"] = $row["roles"];

            $req = "select * from `infoperso` where id = $id";
            $curseur = mysqli_query($bdd,$req);
            $row = mysqli_fetch_assoc($curseur);
            //var_dump($_SESSION);
            $_SESSION["name"] = $row["nom"];
            $_SESSION["address"] = $row["adresse"];
            $_SESSION["phone"] = $row["numTel"];

            $curseur = mysqli_query($bdd,$req);
            if ($_SESSION["role"] == 1) {
                echo "<meta http-equiv='refresh' content='0;url=../Accueil.php'>";
            }elseif ($_SESSION["role"] == 2) {
                echo "<meta http-equiv='refresh' content='0;url=index.php'>";
            }
        }else {
            $_SESSION["error"] = true;
            echo "<meta http-equiv='refresh' content='0;url=login.php'>";
        }
            

    }else {
        $_SESSION["error"] = true;
        echo "<meta http-equiv='refresh' content='0;url=login.php'>";
    }

?>