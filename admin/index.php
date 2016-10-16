<?php
    session_start();
    require_once("classKORISNIK.php");
    $user = new KORISNIK();

    if( $user->logovan() == true )
    {
        $user->preusmjeri('admin.php');
    }

    if( isset($_POST['bLogin']) )
    {
        $uname = $_POST['user'];
        $upass = $_POST['pw'];

        if( $user->login($uname, $upass) )
        {
            $user->preusmjeri('admin.php');
        }
        else
        {
            $error = "Pogrešan username ili password!";
        } 
    }
?>
<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<title>Apoteka Libero</title>

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="../files/css/bootstrap.css">
	<link rel="stylesheet" href="../files/css/animate.css">
	<link rel="stylesheet" href="../files/css/simple-line-icons.css">
	<link rel="stylesheet" href="../files/css/font-awesome.min.css">
	<link rel="stylesheet" href="../files/css/style.css">
	<link rel="stylesheet" href="../files/rs-plugin/css/settings.css">
    <link rel="stylesheet" href="style.css">

</head>
    
<body>
	<div class="sidebar-menu-container" id="sidebar-menu-container">
		<div class="sidebar-menu-push">
			<div class="sidebar-menu-overlay"></div>
			<div class="sidebar-menu-inner">
<!-- HEADER  -->     
                <header class="site-header">
					<div id="main-header" class="main-header header-sticky">
						<div class="inner-header clearfix">
							<div class="logo">
								<a href="../index.php"><img src="../files/images/apotekafinal.png" id="logo"></a>
							</div>
							<div class="header-right-toggle pull-right hidden-md hidden-lg">
								<a href="javascript:void(0)" class="side-menu-button"><i class="fa fa-bars"></i></a>
							</div>
							<nav class="main-navigation pull-right hidden-xs hidden-sm">
								<ul>
									<li><a href="../index.php">Početna</a></li>
									<li><a href="../oNama.php">O nama</a></li>
									<li><a href="../kontakt.php">Kontakt</a></li>
									<li><a id="eng" href="../adminus">English</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</header>
<!--  BODY   -->   

                <div class="containerForm">
                     <br> <br> <br> 
                     <div class="form-container">
                         <form id="loginForm" method="POST">
                             <h2> Prijava </h2>
                             <?php
                                 if(isset($error))
                                 {
                                     echo "<div class=\"alert alert-danger\">
                                           <i class=\"glyphicon glyphicon-warning-sign\"></i> &nbsp;".$error."!
                                           </div>";
                                 }
                             ?>
                             <div class="form-group">
                                 <input type="text" class="form-control" name="user" placeholder="Korisničko ime" required />
                             </div>
                             <div class="form-group">
                                 <input type="password" class="form-control" name="pw" placeholder="Šifra" required />
                             </div>
                                <div class="clearfix"></div><hr />
                                <div class="form-group">
                                    <button type="submit" name="bLogin" class="btn btn-block btn-primary"> PRIJAVI SE
                                    </button>
                                </div>
                                <br>
                        </form>
                    </div>
                    <br> <br>
                </div>
                
<!-- FOOTER  -->
               <footer class="footer">
					<div class="three spacing"></div>
					<div class="container">
						<div class="row">
							<div class="col-md-3 col-md-3k2">
							<h1>
								<a href="../index.php">
									<img src="../files/images/logo2.png" id="logo">
								</a>
							</h1>
							<p>Apoteka Libero 2016.</p>
							<div class="spacing"></div>
							<ul class="socials">
								<li>
									<a href="https://www.facebook.com/apotekalibero/?fref=ts">
										<i class="fa fa-facebook fb"></i>
									</a>
								</li>
							</ul>
							<div class="spacing"></div>
							</div>
							<div class="col-md-3 col-md-3n2">
								<div class="spacing"></div>
								<div class="links links2">
									<h4>Apoteka Libero</h4>
									<ul>
										<li><a href="../index.php">Početna</a></li>
										<li><a href="../oNama.php">O nama</a></li>
										<li><a href="../kontakt.php">Kontakt</a></li>   
										<li><a href="../adminus">English</a></li>
									</ul>
								</div>
								<div class="spacing"></div>
							</div>
							<div class="col-md-3 col-md-3k">
								<div class="spacing"></div>
								<div class="links">
									<h4>Kontakt</h4>
									<ul>
										<li><a >Telefon: 033 426 700</a></li>
										<li><a >Fax: 033 426 701</a></li>
										<li><a >email: apotekalibero@gmail.com</a></li>
									</ul>
								</div>
								<div class="spacing"></div>
							</div>
							<div class="col-md-3  col-md-3n">
								<div class="spacing"></div>
									<h4>Lokacija</h4>
									<ul>
										<li><a>ul. Rašida Bešlije br. 1,<br> stambeno-poslovna zgrada "Libero"</a></li>
									</ul>
							</div>
						</div>
					</div>
					<div class="two spacing"></div>
				</footer>

				<a href="#" class="go-top"><i class="fa fa-angle-up"></i></a>
			</div>
		</div>

<!--  MENU  -->
		<nav class="sidebar-menu slide-from-left">
			<div class="nano">
				<div class="content">
					<nav class="responsive-menu">
						<ul>
							<li><a href="../index.php">Početna</a></li>
							<li><a href="../oNama.php">O nama</a></li>
							<li><a href="../kontakt.php">Kontakt</a></li>
                            <li><a href="../adminus">English</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</nav>
	</div>


<!-- SCRIPTS -->
	<script type="text/javascript" src="../files/js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="../files/js/bootstrap.min.js"></script>
	<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    <script src="../files/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="../files/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

	<script type="text/javascript" src="../files/js/plugins.js"></script>
	<script type="text/javascript" src="../files/js/custom.js"></script>

</body>
</html>