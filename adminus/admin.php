<?php
    session_start();
	
	require_once ('classKORISNIK.php');
	$user = new KORISNIK();

	if( $user->logovan() != true )
	{
		$user->preusmjeri('index.php');
	}
    
    include 'izbrisiUslugu.php';
    include 'dodajUslugu.php';
    include 'izbrisiNovost.php';
    include 'dodajNovost.php';
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
								<a href="../home.php"><img src="../files/images/apotekafinal.png" id="logo"></a>
							</div>
							<div class="header-right-toggle pull-right hidden-md hidden-lg">
								<a href="javascript:void(0)" class="side-menu-button"><i class="fa fa-bars"></i></a>
							</div>
							<nav class="main-navigation pull-right hidden-xs hidden-sm">
								<ul>
									<li><a href="../home.php">Home</a></li>
                                    <li><a href="../aboutUs.php">About us</a></li>
                                    <li><a href="../contact.php">Contact</a></li>   
                                    <li><a href="../admin/admin.php">Bosanski</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</header>
            
<!--  BODY   -->   
                <div id="logout">
                    <a href="logout.php?logout=true" id="hrefLogout">
                        <h2 id="h2Logout"> LOGOUT </h2>
                     </a>
                </div>
            
<!-- USLUGE  -->   		
				<section class="services green">
					 <div class="container">
                         <div class="section-heading">
						      <h2>What We Offer</h2>
						      <div class="section-dec"></div>
                         </div>         
				         <div class="ostalo">
                             <?php
                                 include 'ispisUsluga.php';
                             ?>
                             <div class="service-item col-md-4 height usluga">
                                <span><i class=""></i></span>   
                                    <form id="imageform" method="POST" enctype="multipart/form-data" action="admin.php">
                                        <div class="tittle tittle2"> 
                                            <input class="input" name="naslov" type="text" placeholder="Tittle">
                                        </div>
                                        <div class="image-upload">
                                            <label for="photoimg">
                                                <img src="uploadPic.png" id='slikaDodaj'>
                                            </label>
                                            <input type="file" name="photoimg" id="photoimg" />
                                        </div>
                                        <textarea name="tekst" cols="40" rows="5" placeholder="Text"></textarea><br>
                                        <input type="submit" class="submit" value="Add offer" name="novaUsluga">
                                    </form>  
                             </div>
                         </div>
					  </div>
				 </section>
                
                 <section class="services green2">
                    <div class="container container2">
                        <div class="section-heading2">
                            <h2>News</h2>
                            <div class="section-dec"></div>
                        </div>
                        <?php
                            include 'ispisNovosti.php';
                        ?>
                        <div class="novost novost2">
                            <form method="POST" action="admin.php" id="formaNovost">
                                 <div class="tittle tittle2"> 
                                    <input class="input" name="naslovN" type="text" placeholder="Tittle">
                                 </div>
                                 <textarea name="tekstN" cols="40" rows="5" placeholder="Text"></textarea><br>
                                <input type="submit" class="submit" value="Add news" name="novaNovost">
                            </form>
                        </div>
                    </div>
                 </section>
                
<!-- FOOTER  -->
                <footer class="footer">
					<div class="three spacing"></div>
					<div class="container">
						<div class="row">
							<div class="col-md-3 col-md-3k2">
							<h1>
								<a href="../home.php">
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
										<li><a href="../home.php">Home</a></li>
										<li><a href="../aboutUs.php">About us</a></li>
										<li><a href="../contact.php">Contact</a></li>   
										<li><a href="../admin/admin.php">Bosanski</a></li>
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
							<li><a href="../home.php">Home</a></li>
                            <li><a href="../aboutUs.php">About us</a></li>
                            <li><a href="../contact.php">Contact</a></li>   
                            <li><a href="../admin/admin.php">Bosanski</a></li>
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