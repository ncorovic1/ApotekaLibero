<?php
class Database {
    private $DB_host = "localhost";
    private $DB_user = "apotekal_admin";
    private $DB_pass = "admin3#";
    private $DB_port = "3306";
    private $DB_name = "apotekal_database";
    public  $DB_con;
    
    public function napraviKonekciju() {
        $this->DB_con = null;
        try
        {
             /* $this->DB_con = new PDO("mysql:host={$this->DB_host};dbname={$this->DB_name};port={$this->DB_port};charset=utf8",$this->DB_user,$this->DB_pass);*/
             $this->DB_con = new PDO("mysql:host=localhost;dbname=apotekalibero;charset=utf8","admin","admin");
             $this->DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e)
        {
             echo $e->getMessage();
        }
    }

}
?>