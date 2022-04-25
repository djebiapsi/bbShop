<?php
    session_start();

    include('bdconnect.php');


    
    /**
     * Récupération du formulaire
    */

    $password = $_POST["password"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $phone = $_POST["phone"];
    $role = 1;    
    //var_dump($_POST);


    /**
     * Contrôle de cohérence
    */
    $save = true;

    $emailExist;

    $req = "select count(*) as 'count' FROM user WHERE email = '$email'";

    $curseur = mysqli_query($bdd,$req);

    $row = mysqli_fetch_assoc($curseur); 
    
    echo $row["count"];

    if ($_POST["password"] != $_POST["password2"] ) {
        $save = false;
        $_SESSION['password'] = true;
    }
    if($row["count"] != 0) {
        $save = false;
        $_SESSION['email'] = true;
    }

    //var_dump($save);

    /**
     * Enregistrement de l'utilisateur + hashage du mdp
     * Condition : $save
     */

     if ($save) {

        
        $password = password_hash($password, PASSWORD_DEFAULT);
        $ajouter = "insert into user (email,roles,password) values ('$email','$role','$password')";
        mysqli_query($bdd, $ajouter);
        
        $req = "select id from user where email = '$email'";
        $curseur = mysqli_query($bdd,$req);
        $row = mysqli_fetch_assoc($curseur); 
        $id = $row["id"];
        //echo $id;
        $ajouter = "insert into infoperso (nom,adresse,numTel,id) values ('$name','$address','$phone','$id')";
        mysqli_query($bdd, $ajouter);

        $_SESSION['inscrit'] = true;

        header('Location: inscriptionform.php');

     }else {

        $_SESSION['inscrit'] = false;
        
        header('Location: inscriptionform.php');
     }


?>