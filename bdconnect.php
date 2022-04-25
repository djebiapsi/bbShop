<?php

    //définir vos paramètres dec connexion

    // nom du serveur 
    $host="localhost";
    // nom utilisateur
    $login="btsmc0_bryank";
    // mot de passe
    $pass="bryank123";
    // nom de la base de données
    $dbname="btsmc0_bryank";


    // créer la connexion avec la base de données  dbname=$dbname user=$login password=$pass
    $bdd = mysqli_connect($host, $login, $pass, $dbname);
  

    // vérification de la connexion avec la BD
    if (!$bdd)
        {
            echo "Connexion non-reussie à mysqlisql ";
        } 
    else 
        {
           
        }
    
    
    
?>