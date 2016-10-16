<?php
     function phpAlert($msg) {
        echo '<script type="text/javascript">alert("' . $msg . '")</script>';
    }

    if( isset($_POST['tekst']) && isset($_POST['naslov']) && $_POST['tekst'] != "" && $_POST['naslov'] != "" && !empty($_FILES['photoimg']['name']) ) {
        phpAlert($_FILES['photoimg']['name']);
        try {
            $imeFajla = $_FILES['photoimg']['name'];
            $sourceFajla = $_FILES['photoimg']['tmp_name'];
            $destination = "files/images/".$imeFajla;
            $destinationFajla = "../files/images/".$imeFajla;
            phpAlert($destinationFajla);
            move_uploaded_file($sourceFajla, $destinationFajla);
            phpAlert("poslije upload-a");
            /*$veza = new PDO("mysql:dbname=apotekal_database;host=localhost;port=3306;charset=utf8", "apotekal_admin", "admin3#");*/
            $veza = new PDO("mysql:dbname=apotekalibero;host=localhost;charset=utf8", "admin", "admin");
            $veza->exec("set names utf8");
            $query = $veza->prepare("INSERT
                                     INTO   dodatneuslugeus(`naslov`, `tekst`, `ikona`) 
                                     VALUES(:naslov, :tekst, :ikona)");
            $query->bindParam(':naslov', $_POST['naslov'],    PDO::PARAM_STR);
            $query->bindParam(':tekst',  $_POST['tekst'],     PDO::PARAM_STR);
            $query->bindParam(':ikona',  $destination,   PDO::PARAM_STR);
            $rezultat = $query->execute();
            phpAlert($destination);
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