<?php

    if( isset($_POST['tekstN']) && isset($_POST['naslovN']) && $_POST['tekstN'] != "" && $_POST['naslovN'] != "") {
        try {
            /*$veza = new PDO("mysql:dbname=apotekal_database;host=localhost;port=3306;charset=utf8", "apotekal_admin", "admin3#");*/
            $veza = new PDO("mysql:dbname=apotekalibero;host=localhost;charset=utf8", "admin", "admin");
            $veza->exec("set names utf8");
            $query = $veza->prepare("INSERT
                                     INTO   novostius(`naslov`, `tekst`) 
                                     VALUES(:naslov, :tekst)");
            $query->bindParam(':naslov', $_POST['naslovN'],    PDO::PARAM_STR);
            $query->bindParam(':tekst',  $_POST['tekstN'],     PDO::PARAM_STR);
            $rezultat = $query->execute();

            if (!$rezultat) {
                $greska = $query->errorInfo();
                print "SQL greska: ".$greska[2];
                exit();
            }
        }
        catch(PDOException $e) {
            echo $e->getMessage();
        }
        $veza = null;
    }
?>