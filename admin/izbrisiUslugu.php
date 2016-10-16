<?php
    if( isset($_GET['deleteUslugu']) && isset($_GET['id']) )
    try {
        /*$veza = new PDO("mysql:dbname=apotekal_database;host=localhost;port=3306;charset=utf8", "apotekal_admin", "admin3#");*/
        $veza = new PDO("mysql:dbname=apotekalibero;host=localhost;charset=utf8", "admin", "admin");
        $veza->exec("set names utf8");
        $veza->exec("DELETE
                     FROM   dodatneusluge
                     WHERE  id=".$_GET['id']);
    }
    catch(PDOException $e) {
        echo $e->getMessage();
    }
    $veza = null;
?>