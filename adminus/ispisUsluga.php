<?php
    try {
        /*$veza = new PDO("mysql:dbname=apotekal_database;host=localhost;port=3306;charset=utf8", "apotekal_admin", "admin3#");*/
        $veza = new PDO("mysql:dbname=apotekalibero;host=localhost;charset=utf8", "admin", "admin");
        $veza->exec("set names utf8");
        $rezultat = $veza->query("SELECT id, naslov, tekst, ikona
                                  FROM   dodatneuslugeus");
        $j =0;
        $veza = null;
        foreach($rezultat as $usluga) {
            if($usluga['id'] != "" && $usluga['naslov'] != "" && $usluga['tekst'] != "" && $usluga['ikona'] != "") {
                $j++;
                echo "<div class=\"service-item col-md-4 height usluga\">
                        <form method=\"GET\" action=\"admin.php\">
                            <input type=\"hidden\" name=\"id\" value=\"".$usluga['id']."\">
                            <input type=\"submit\" name=\"deleteUslugu\" value=\"X\" class='x'>
                        </form>
                        <div class=\"tittle\"><h3>".$usluga['naslov']."</h3></div>
                        <span><i class=\"ikona1class\"><img src=\"..\\".$usluga['ikona']."\" id=\"ikona1\"></i></span><br><br>
                        <p>".$usluga['tekst']."</p>
                      </div>";
            }
        }
    }
    catch(PDOException $e) {
        echo $e->getMessage();
    }
?>