<?php
    session_start();
    include('bdconnect.php');
    var_dump($_POST);

    if (isset($_SESSION["auth"])) {
        $idC = $_SESSION["idUser"];
        $idP = $_GET["idP"];
        $taille = $_POST["size"];

        $ajouter = "INSERT INTO `reservation`(`idClient`, `idProduit`, `taille`, `statue`) VALUES ('$idC','$idP','$taille','wait')";
        mysqli_query($bdd, $ajouter);

        header('Location: www.btsmccibs.org/bryank/bbshop/Accueil.php');

        
    }else {
        header('Location: www.btsmccibs.org/bryank/bbshop/connexion.php');
    }
?>