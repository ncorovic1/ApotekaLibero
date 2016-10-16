<?php
	session_start();
	
	require_once 'classKORISNIK.php';
	$user = new KORISNIK();
	
    
	if(isset($_GET['logout']) && $_GET['logout']=="true")
	{
		$user->logout();
		$user->preusmjeri('index.php');
	}
	
	if(!$user->logovan()) {
		$user->preusmjeri('index.php');
	}	
    else {
		$user->preusmjeri('admin.php');
    }
?>

