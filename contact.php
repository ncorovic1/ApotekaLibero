<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<title>Contact | Libero Pharmacy</title>

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="files/css/bootstrap.css">
	<link rel="stylesheet" href="files/css/animate.css">
	<link rel="stylesheet" href="files/css/simple-line-icons.css">
	<link rel="stylesheet" href="files/css/font-awesome.min.css">
	<link rel="stylesheet" href="files/css/style.css">
	<link rel="stylesheet" href="files/rs-plugin/css/settings.css">
	<link rel="icon" href="files/images/logo.jpg">
</head>
<body>


	<div class="sidebar-menu-container" id="sidebar-menu-container">

		<div class="sidebar-menu-push">

			<div class="sidebar-menu-overlay"></div>

			<div class="sidebar-menu-inner">

        <header class="site-header">
          <div id="main-header" class="main-header header-sticky">
            <div class="inner-header clearfix">
              <div class="logo">
                <a href="home.php"><img src="files/images/apotekafinal.png" id="logo"></a>
              </div>
              <div class="header-right-toggle pull-right hidden-md hidden-lg">
                <a href="javascript:void(0)" class="side-menu-button"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="main-navigation pull-right hidden-xs hidden-sm">
                <ul>
                  <li><a href="home.php">Home</a></li>
				  <li><a href="aboutUs.php">About Us</a></li>
				  <li><a href="contact.php">Contact</a></li>
				  <li><a id="eng" href="kontakt.php">Bosanski</a></li>
                </ul>
              </nav>
            </div>
          </div>
        </header>


				<section class="page-heading wow fadeIn" data-wow-duration="1.5s" style="background-image: url(files/images/apoteka7.jpg)">
					<div class="container">
						<div class="page-name">
							<h1 id="naslov">Contact</h1>
							
						</div>
					</div>
				</section>

				<section class="contact-map-wrapper">
					<div class="container">
						<div class="section-heading section-heading1">
							<h2>Find Us On Map</h2>
							<div class="section-dec"></div>
						</div>
						<div class="row">
                            <div class="col-sm-5">
								<div class="keno keno2">
									<ul type="none">
									<li><img src="files/images/Telefon.jpg"> Phone: +387 33 426 700</li>
									<li><img src="files/images/Fax.jpg"> Fax: +387 33 426 701</li>
									<li><img src="files/images/Adresa.jpg"> Address: ul. Rašida Bešlije br. 1</li>
									<li><img src="files/images/radnoVrijeme.jpg"> Working hours: 08:00 - 16:00</li>
									<li><img src="files/images/Email.jpg"> E-mail: info@apotekalibero.ba</li>
									</ul>
								</div>
							</div>
							<div class="col-sm-7">
								<div class="contact-map" style="height: 380px; position: relative; top: -20px;">
                                    <script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyBsjBjW4Hz6TExTAMWV6nvpNrWSU2aD0So'></script>
								    <div style='overflow:hidden;height:440px;width:700px;'>
								        <div id='gmap_canvas' style='height:440px;width:700px;'></div>
								        <div>
                                            <small><a href="http://embedgooglemaps.com">Embed your Google Map here!</a></small>
                                        </div>
								        <div>
                                            <small><a href="https://binaireoptieservaringen.nl/">Meer informatie over binaire opties in Nederland vind je hier!</a></small>
                                        </div>
								        <style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
                                    </div>
                                    <script type='text/javascript'>function init_map()
                                    {var myOptions = {zoom:17,center:new google.maps.LatLng(43.8947634,18.37236770000004),mapTypeId: google.maps.MapTypeId.ROADMAP};
                                    map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
                                    marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(43.8947634,18.37236770000004)});
                                    infowindow = new google.maps.InfoWindow({content:'<strong>Apoteka Libero</strong><br>Hotonj, Bosnia and Hercegovina<br>'});
                                    google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});
                                    infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);
                                    </script>
								</div>
							</div>
						</div>
					</div>
				</section>


				<section class="contact-us">
					<div class="container">
						<div class="section-heading section-heading1">
							<h2>Send Us A Message</h2>
							<div class="section-dec"></div>
						</div>
						<div class="send-message col-sm-12">
							<form id="contact_form" action="#" method="POST" enctype="multipart/form-data">
								<div class=" col-md-4 col-sm-4 col-xs-6">
									<input type="text" class="blog-search-field" name="s" placeholder="Your name..." value="">
								</div>
								<div class="col-md-4 col-sm-4 col-xs-6">
									<input type="text" class="blog-search-field" name="s" placeholder="Your email..." value="">
								</div>
								<div class="col-md-4 col-sm-4 col-xs-12">
									<input type="text" class="subject" name="s" placeholder="Subject..." value="">
								</div>
								<div class="col-md-12 col-sm-12">
									<textarea id="message" class="input" name="message" placeholder="Message..."></textarea>
								</div>
								<div class="submit-coment col-md-12">
									<div class="btn-black">
										<a href="#">Send</a>
									</div>
								</div>
							</form>
						</div>
					</div>
				</section>

        <footer class="footer">
      <div class="three spacing"></div>
	  <div class="container">
      <div class="row">
        <div class="col-md-3 col-md-3k2">
          <h1>
            <a href="home.php">
             <img src="files/images/logo2.png" id="logo">
            </a>
          </h1>
          <p>Libero Pharmacy 2016.</p>
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
            <h4>Libero Pharmacy</h4>
            <ul>
              <li><a href="home.php">Home</a></li>
              <li><a href="aboutUs.php">About Us</a></li>
              <li><a href="contact.php">Contact</a></li>
              <li><a href="kontakt.php">Bosanski</a></li>
            </ul>
          </div>
          <div class="spacing"></div>
        </div>
        <div class="col-md-3 col-md-3k">
          <div class="spacing"></div>
          <div class="links">
            <h4>Contact</h4>
            <ul>
              <li><a >Phone: 033 426 700</a></li>
              <li><a >Fax: 033 426 701</a></li>
              <li><a >Email: apotekalibero@gmail.com</a></li>
            </ul>
          </div>
          <div class="spacing"></div>
        </div>
        <div class="col-md-3 col-md-3n">
          <div class="spacing"></div>
          <h4>Location</h4>
          <ul>
          <li><a>1 Rašida Bešlije, Sarajevo 71000<br>
residential and commercial building "Libero"</a></li>
</ul>
        </div>

      </div>
	  </div>
      <div class="two spacing"></div>
    </footer>
				<a href="#" class="go-top"><i class="fa fa-angle-up"></i></a>

			</div>

		</div>

    <nav class="sidebar-menu slide-from-left">
			<div class="nano">
				<div class="content">
					<nav class="responsive-menu">
						<ul>
							<li><a href="home.php">Home</a></li>
							<li><a href="aboutUs.php">About Us</a></li>
							<li><a href="contact.php">Contact</a></li>
                            <li><a href="kontakt.php">Bosanski</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</nav>

	</div>




	<script type="text/javascript" src="files/js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="files/js/bootstrap.min.js"></script>
	<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    <script src="files/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="files/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

	<script type="text/javascript" src="files/js/plugins.js"></script>
	<script type="text/javascript" src="files/js/custom.js"></script>

	<!-- Google Map -->
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="files/js/jquery.gmap3.min.js"></script>

	<!-- Google Map Init-->
    <script type="text/javascript">
        jQuery(function($){
            $('.contact-map').gmap3({
                marker:{
                    address: '43.8949741, 18.3705889'
                },
                    map:{
                    options:{
                    zoom: 15,
                    scrollwheel: false,
                    streetViewControl : true
                    }
                }
            });
        });
    </script>

</body>

<!-- Mirrored from torchtemplates.net/html/YOM/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Jun 2015 08:35:04 GMT -->
</html>
