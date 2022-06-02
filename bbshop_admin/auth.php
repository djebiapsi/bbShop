<?php

    session_start();
    if (! isset($_SESSION["auth"])) {
        echo "<meta http-equiv='refresh' content='0;url=login.php'>";
    }else{
        if(! $_SESSION["role"] == 2){
            echo "<meta http-equiv='refresh' content='0;url=login.php'>";
        }
    }
    

?>