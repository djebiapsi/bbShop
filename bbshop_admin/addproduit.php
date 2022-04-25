<?php
    include('../bdconnect.php');

    var_dump($_FILES);

    echo  $_FILES['path']['name'];

    if ($_FILES['path']['size'] > 0) {
        copy($_FILES['path']['tmp_name'], "../images/".$_FILES['path']['name']);
        $path = $_FILES['path']['name'];
    }else {
        $path = "";
    }
    
    if ($_FILES['path2']['size'] > 0) {
        copy($_FILES['path2']['tmp_name'], "../images/".$_FILES['path2']['name']);
        $path2 = $_FILES['path2']['name'];
    }else {
        $path2 = "";
    }

    if ($_FILES['path3']['size'] > 0) {
        copy($_FILES['path3']['tmp_name'], "../images/".$_FILES['path3']['name']);
        $path3 = $_FILES['path3']['name'];
    }else {
        $path3 = "";
    }
    
    $ref = $_POST['ref'];
    $desc = $_POST['desc'];
    $prix = $_POST['prix'];

    $req ="INSERT INTO `produit`( `refProduit`, `description`, `path`, `path2`, `path3`, `prix`) VALUES ('$ref','$desc','images/$path','images/$path2','images/$path3', '$prix')";

    mysqli_query($bdd, $req);

    header('produit_admin.php');

?>