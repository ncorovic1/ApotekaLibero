<?php
require_once('classBAZA.php');

class KORISNIK
{
    private $konekcija;
 
    function __construct()
    {
        $baza = new Database();
		$baza->napraviKonekciju();
		$this->konekcija = $baza->DB_con;
    }
    
    public function login($uname,$upass)
    {
       try
       {
          $uname = strtolower($uname);
          $query = "SELECT * FROM korisnici WHERE user_name=:uname LIMIT 1";
          $stmt = $this->konekcija->prepare($query);
          $stmt->bindparam(":uname", $uname);
          $stmt->execute();
           
          $rezultat=$stmt->fetch(PDO::FETCH_ASSOC);
          if($stmt->rowCount() > 0)
          {
             if(password_verify($upass, $rezultat['user_pass']))
             {
                $_SESSION['idKorisnika'] = $rezultat['id'];
                return true;
             }
             else
             {
                return false;
             }
          }
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }
   }
 
   public function logovan()
   {
      if( isset($_SESSION['idKorisnika']) )
      {
         return true;
      }
      return false;
   }
 
   public function preusmjeri($url)
   {
       header("Location: $url");
   }
 
   public function logout()
   {
        session_destroy();
        unset($_SESSION['idKorisnika']);
        return true;
   }
}
?>