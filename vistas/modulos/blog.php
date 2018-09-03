<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tu tienda en Linea</title>
    <link rel="icon" type="img/png" href="../images/icon.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="../css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="../css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="../css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="../css/magnific-popup.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="../css/owl.carousel.min.css">
	<link rel="stylesheet" href="../css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="../css/style.css">

	<!-- Modernizr JS -->
	<script src="../js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>

	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class=" col-lg-3 col-md-1">
							<div id="colorlib-logo">
								<a href="https://tutiendaenlinea.online">Tu tienda en linea</a>
							</div>
						</div>
						<div class="col-lg-9 col-md-10 text-right menu-1">
							<ul>
								<li class="active"><a href="#">Blog</a></li>
								<!-- <li class="has-dropdown">
									<a href="work.html">Works</a>
									<ul class="dropdown">
										<li><a href="work-grid.html">Works grid with text</a></li>
										<li><a href="work-grid-without-text.html">Works grid w/o text</a></li>
									</ul>
								</li> -->
								 <!--<li><a href="#precio">Precio</a></li>-->
								<!-- <li><a href="blog.html">Blog</a></li> -->
								<!-- <li><a href="about.html">Acerca de nosotros</a></li> -->
								<li><a href="https://demobackend.tutiendaenlinea.online">DemoAdmin</a></li>
								<li><a href="https://demo.tutiendaenlinea.online">DemoTienda</a></li>
								<li><a href="contact.php">Contacto</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>

		<section id="home" class="video-hero" style="height: 500px; background-image: url(images/cover_img_1.jpg);  background-size:cover; background-position: center center;background-attachment:fixed;" data-section="home">
		<div class="overlay"></div>
			<div class="display-t display-t2 text-center">
				<div class="display-tc display-tc2">
					<div class="container">
						<div class="col-md-12 col-md-offset-0">
							<div class="animate-box">
								<h2>Blog</h2>
								<p class="breadcrumbs"><span><a href="https://tutiendaenlinea.online">Home</a></span> <span>Blog</span></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<div class="colorlib-blog">
			<div class="container">
				<div class="row">
					<div class="col-md-12 animate-box">
						<article>
							<h2>Datos Estructurados</h2>
							<p class="admin"><span>10 Ago, 2018</span></p>
							<h3>¿Qué són los datos estructurados?</h3>
							<p>
								Los datos estructurados son información para máquinas
								 y consisten en una serie de etiquetas o anotaciones que
								 describen el contenido de tus páginas web.
								 Los usuarios no pueden verlas, pero sí los los robots,
								 que las usan para entender lo que van a indexar.
							</p>
							<h3>¿Pára que me sirven a mí los datos estructurados en mí página web?</h3>
							<p> Básicamente si quieres mejorar tu posicionamiento en google,
								  necesitas saber como implementar esto en tu página web.
							</p>
							<h3>¿Si contrato mi tienda en linea para vender mis productos
								  me evito hacer todo esto dentro de mi código para
								  cada producto que yo suba?</h3>
							<p> Sí</p>
							<hr />
							<h3>¿Comó agrego los datos estructurados a mi página?</h3>
							<p>
									<br />
									Supongamos que ustedes administran esta página y quieren promocionar
									un producto, en este caso, la plataforma virtual de tu tienda en linea.
									<br />
									Debemos entrar a la página <a href="https://schema.org">schema.org</a>
									y entrar a la parte de schemas en el menú.
									<br />
									Como nosotros queremos promocionar un producto, buscamos "products" en el menú.
									o dale click aquí <a href="https://schema.org/Product">https://schema.org/Product</a>
									Una vez en "products" buscamos en la parte de abajo de la página la parte de "examples"
									y seleccionamos el que nos sirva, nosotros elegimos el numero 2 ("example 2").
							</p>
							<div class="row" >
								<img style="height:100%; width:80%" src="https://tutiendaenlinea.online/vistas/images/example2.png" />
							</div>
							<br />
							<p>
								Modificamos el html de acuerdo a nuestras necesidades:
							</p>
							<code>
								Imagen:<br />
								< img src="http://localhost/" alt="Tu Tienda En Linea" style="height:100%; width:80%"/><br />
								Nombre: <br />
								< span >Tu Tienda Virtual< /span >	<br />
								Descripción:<br />
								< span >Plataforma movil de comercio electronico lista para usarse, integracion con Paypal,
								autoadministrable, soporte, integracion con redes sociales, integrada a la nube, hosting incluido. < /span>
								<br  />
								Rating: <br />
								< span>95 out of< /span>
								<br />
								< span itemprop="bestRating">100< /span>
								based on < span itemprop="ratingCount">24< /span> user ratings.
            	</code>
							<br />
							<p>
								 Y ahora si pasamos a agregar los microdatos a nuestro html, en la segunda pestaña de el ejemplo 2:
							</p>
							<br />
							<div class="row" >
								<img style="height:100%; width:80%" src="https://tutiendaenlinea.online/vistas/images/microdata.png" />
							</div>
							<br />
							<p>
									Hay que notar como estamos agregando las clases <code>itemscope, itemtype, itemprop</code>, estas clases
									son las que van a ayudar a los robots de google ha leer mejor tu código.
							</p>
							<p>
								 Al final tu código se veria así:<br />
								 <code>
									 < div itemscope itemtype="http://schema.org/Product"><br />
												 < img itemprop="image" src="http://localhost/" alt="Tu Tienda En Linea" style="height:100%; width:80%"/><br />

											 < span itemprop="name">Tienda Virtual< /span><br />
											 Descripción del producto:<br />
											 < span itemprop="description">Plataforma movil de comercio electronico lista para usarse, integracion con Paypal,
											 autoadministrable, soporte, integracion con redes sociales, integrada a la nube, hosting incluido. </ span><br />
											 < div itemprop="aggregateRating"<br />
												 itemscope itemtype="http://schema.org/AggregateRating"><br />
												 < span itemprop="ratingValue">95</ span><br />
												 out of < span itemprop="bestRating">100</ span><br />
												 based on < span itemprop="ratingCount">24</ span> user ratings<br />
											 < div itemprop="offers" itemscope itemtype="http://schema.org/AggregateOffer"><br />
												 < span itemprop="priceCurrency" content="MXN">$</ span><br />
												 < span itemprop="lowPrice" content="399.00">399.00</ span><br />
												 to< span itemprop="priceCurrency" content="MXN">$</ span><br />
												 < span itemprop="highPrice" content="799.00">799.00</ span><br />



								 </code>
								 <br />
								  y en tu página se mostraria de esta manera:
							</p>
							<div itemscope itemtype="http://schema.org/Product">
								<div class="row">
										<img itemprop="image" src="https://tutiendaenlinea.online/vistas/images/front1.png" alt="Tu Tienda En Linea" style="height:100%; width:80%"/>
								</div>
								<hr />
								<div class="row">
									<span itemprop="name">Tienda Virtual</span>
									Descripción del producto: <br />
									<span itemprop="description">Plataforma movil de comercio electronico lista para usarse, integracion con Paypal,
									autoadministrable, soporte, integracion con redes sociales, integrada a la nube, hosting incluido. </span>
									<div itemprop="aggregateRating"
										itemscope itemtype="http://schema.org/AggregateRating">
										<span itemprop="ratingValue">95</span>
										out of <span itemprop="bestRating">100</span>
										based on <span itemprop="ratingCount">24</span> user ratings

									</div>
									<div itemprop="offers" itemscope itemtype="http://schema.org/AggregateOffer">
										<span itemprop="priceCurrency" content="MXN">$</span>
										<span itemprop="lowPrice" content="399.00">399.00</span>
										to<span itemprop="priceCurrency" content="MXN">$</span> <span itemprop="highPrice" content="799.00">799.00</span>

									</div>
								</div>
							</div>
							<hr />
							<p>
								Cualquier duda por favor <a href="https://tutiendaenlinea.online/vistas/modulos/contact.php">contáctanos</a>
							</p>
							<p class="author-wrap"><a href="#" class="author-img" style="background-image: url(images/person1.jpg);"></a> <a href="#" class="author">Por Tú Tienda en Línea</a></p>
						</article>
					</div>
					<!--<div class="col-md-4 animate-box">
						<article>
							<h2><a href="#">Building the Mention Sales Application on Unapp</a></h2>
							<p class="admin"><span>May 12, 2018</span></p>
							<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
							<p class="author-wrap"><a href="#" class="author-img" style="background-image: url(images/person2.jpg);"></a> <a href="#" class="author">by Dave Miller</a></p>
						</article>
					</div>
					<div class="col-md-4 animate-box">
						<article>
							<h2><a href="#">Building the Mention Sales Application on Unapp</a></h2>
							<p class="admin"><span>May 12, 2018</span></p>
							<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
							<p class="author-wrap"><a href="#" class="author-img" style="background-image: url(images/person3.jpg);"></a> <a href="#" class="author">by Dave Miller</a></p>
						</article>
					</div>->
				</div>

			<!--	<div class="row">
					<div class="col-md-4 animate-box">
						<article>
							<h2><a href="#">Building the Mention Sales Application on Unapp</a></h2>
							<p class="admin"><span>May 12, 2018</span></p>
							<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
							<p class="author-wrap"><a href="#" class="author-img" style="background-image: url(images/person1.jpg);"></a> <a href="#" class="author">by Dave Miller</a></p>
						</article>
					</div>
					<div class="col-md-4 animate-box">
						<article>
							<h2><a href="#">Building the Mention Sales Application on Unapp</a></h2>
							<p class="admin"><span>May 12, 2018</span></p>
							<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
							<p class="author-wrap"><a href="#" class="author-img" style="background-image: url(images/person2.jpg);"></a> <a href="#" class="author">by Dave Miller</a></p>
						</article>
					</div>
					<div class="col-md-4 animate-box">
						<article>
							<h2><a href="#">Building the Mention Sales Application on Unapp</a></h2>
							<p class="admin"><span>May 12, 2018</span></p>
							<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
							<p class="author-wrap"><a href="#" class="author-img" style="background-image: url(images/person3.jpg);"></a> <a href="#" class="author">by Dave Miller</a></p>
						</article>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4 animate-box">
						<article>
							<h2><a href="#">Building the Mention Sales Application on Unapp</a></h2>
							<p class="admin"><span>May 12, 2018</span></p>
							<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
							<p class="author-wrap"><a href="#" class="author-img" style="background-image: url(images/person1.jpg);"></a> <a href="#" class="author">by Dave Miller</a></p>
						</article>
					</div>
					<div class="col-md-4 animate-box">
						<article>
							<h2><a href="#">Building the Mention Sales Application on Unapp</a></h2>
							<p class="admin"><span>May 12, 2018</span></p>
							<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
							<p class="author-wrap"><a href="#" class="author-img" style="background-image: url(images/person2.jpg);"></a> <a href="#" class="author">by Dave Miller</a></p>
						</article>
					</div>
					<div class="col-md-4 animate-box">
						<article>
							<h2><a href="#">Building the Mention Sales Application on Unapp</a></h2>
							<p class="admin"><span>May 12, 2018</span></p>
							<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
							<p class="author-wrap"><a href="#" class="author-img" style="background-image: url(images/person3.jpg);"></a> <a href="#" class="author">by Dave Miller</a></p>
						</article>
					</div>
				</div>-->

				<div class="row">
					<div class="col-md-12 text-center">
						<ul class="pagination">
						<!--	<li class="disabled"><a href="#">&laquo;</a></li>-->
							<li class="active"><a href="#">1</a></li>
				<!--			<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">&raquo;</a></li>-->
						</ul>
					</div>
				</div>
			</div>
		</div>

	<?php

include "footer.php";

	 ?>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>

	<!-- jQuery -->
	<script src="../js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="../js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="../js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="../js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="../js/jquery.stellar.min.js"></script>
	<!-- YTPlayer -->
	<script src="../js/jquery.mb.YTPlayer.min.js"></script>
	<!-- Owl carousel -->
	<script src="../js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="../js/jquery.magnific-popup.min.js"></script>
	<script src="../js/magnific-popup-options.js"></script>
	<!-- Counters -->
	<script src="../js/jquery.countTo.js"></script>
	<!-- Main -->
	<script src="../js/main.js"></script>

	</body>
</html>
