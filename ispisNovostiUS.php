<?php
    function phpAlert($msg) {
        echo '<script type="text/javascript">alert("' . $msg . '")</script>';
    }
    try {
        /*$veza = new PDO("mysql:dbname=apotekal_database;host=localhost;port=3306;charset=utf8", "apotekal_admin", "admin3#");*/
        $veza = new PDO("mysql:dbname=apotekalibero;host=localhost;charset=utf8", "admin", "admin");
        $veza->exec("set names utf8");
        $rezultat = $veza->query("SELECT id, naslov, tekst
                                  FROM   novostius");
        $j =0;
        $veza = null;
        foreach($rezultat as $usluga) {
            if($usluga['id'] != "" && $usluga['naslov'] != "" && $usluga['tekst'] != "") {
                $j++;
                echo "<div class=\"novost\">
                            <div class=\"tittle\"><h3>".$usluga['naslov']."</h3></div>
                            <p>".$usluga['tekst']."</p>
                      </div>";
            }
        }
    }
    catch(PDOException $e) {
        echo $e->getMessage();
    }
?>