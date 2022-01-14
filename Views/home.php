<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <!-- META DATA -->
	<title>DIGICI | LOGISTICA</title>
    
	<meta name="author" content="Josue vasquez">
	<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
	<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
	<!-- FAVICON -->
	<link rel="icon" type="image/png" href="<?= media();?>/images/uploads/dorado.png">
    <!-- STYLESHEETS -->
	<link rel="stylesheet" href="<?= media();?>/pagina/assets\css\bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?= media();?>/pagina/assets\css\style.css">
	<link rel="stylesheet" type="text/css" href="<?= media();?>/pagina/assets\css\accordian.css">
	<link rel="stylesheet" href="<?= media();?>/pagina/assets\css\owl\owl.carousel.min.css">
    <link rel="stylesheet" href="<?= media();?>/pagina/assets\css\owl\owl.theme.default.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800&display=swap" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800&display=swap" rel="stylesheet">
	<!-- SCRIPTS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="<?= media();?>/pagina/assets\js\smoothscroll.js"></script>
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script>
    $("#navbarNav").on("click", "a", function () {
       $(".navbar-toggle").click();
       //or $("#nav").slideToggle();
 });
    </script>
</head>

	<body>
	<!-- NAVBAR -->
		<nav id="navbar" class="navbar fixed-top navbar-expand-lg navbar-header navbar-mobile">
			<div class="navbar-container container">
				<!-- LOGO -->
				<div class="navbar-brand">
				<a class="navbar-brand-logo" href="#">
					<img style="width:68px;" src="<?= media();?>/images/uploads/dorado.png">
				</a>
				</div>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse justify-content-around" id="navbarNav">
					<ul class="navbar-nav menu-navbar-nav">
						<!---Por si quermos agregar items activar los comentado y hacer copias-->
						
						<!-- <li class="nav-item">
							<a class="nav-link" href="#contact">
								<p class="nav-link-number">06</p>
								<p class="nav-link-menu">Contact</p>
							</a>
						</li> -->
					</ul>
					<ul class="navbar-nav">
						<li class="nav-item">
							<a style="background:#e2c353; color:#020e38;" class="nav-link learn-more-btn" href="<?= base_url();?>/login">LOGIN</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
    <!-- SECTION LABEL -->
	<div id="top"></div>
	<!-- WRAPPER -->
		<div class="wrapper">
			<div class="header">
				<div class="container header-container">
					<div class="col-lg-6 header-img-section" >
						

					<lottie-player src="https://assets4.lottiefiles.com/packages/lf20_sk5h1kfn.json"  background="transparent"  speed="1"  style="width: 400px; height: 400px;"  loop  autoplay></lottie-player>
					</div>
					<div class="col-lg-5 offset-lg-1 header-title-section">
						<p class="header-subtitle"></p>
						<h1 class="header-title">Logistica</h1>
						<p class="header-title-text">En la gestión empresarial actual, el ciclo inverso de la mercancía adquiere cada día más importancia como consecuencia de un consumidor más exigente y unas normativas que persiguen mejorar la sostenibilidad de nuestro planeta. </p>
						
					</div>
				</div>
			</div>
			<br><br>
			
			<!-- SECTION LABEL -->
			<div id="services"></div>

			<!-- SERVICES -->
			<div class="services-section" data-aos="fade-up">
				<div class="services-section-bg-graphics">
					<img src="<?= media();?>/pagina/assets\images\services-section-bg.png">
				</div>
				<div class="container services-container">
					<div class="col-lg-5 services-title-section">
						<p class="services-subtitle"></p>
						<h2 class="services-title">Nuestros departamentos</h2>
						<p class="services-text">This is a great section to introduce your company and showcase your featured services.</p>		
						<div class="services-accordion">
							<button class="accordion">
	                          Departamento Compras
	                        </button>
	                        <div class="panel"><p>
	                          El departamento de compras es el conjunto de profesionales que se encargan de adquirir las materias primas, productos semi-acabados y servicios necesarios para el funcionamiento de la Institucion. Por tanto, se trata de un área clave para garantizar el éxito y la optimización de todas las fases sucesivas en la cadena de suministro.
	                        </p></div>
	                        <button class="accordion">
	                          Departamento Inventarios
	                        </button>
	                        <div class="panel"><p>
	                          Establecer procesos, normas y procedimientos para el registro, manejo y control de los bienes muebles e inmuebles y verificar su cumplimiento.
	                        </p></div>
	                         <button class="accordion">
	                          Departamento Transportes
	                        </button>
	                        <div class="panel"><p>
	                          Planificar, dirigir, ejecutar, controlar y evaluar las acciones destinadas a atender los requerimientos del servicio de transporte colectivo y transporte institucional, así como las relativas al mantenimiento preventivo y correctivo.
	                        </p></div>
	                         <button class="accordion">
	                          Departamento Mantenimiento
	                        </button>
	                        <div class="panel"><p>
	                          Se encarga de proporcionar oportuna y eficientemente, los servicios que requiera el Centro en materia de mantenimiento preventivo y correctivo a las instalaciones.
	                        </p></div>
	                        <button class="accordion">
	                          Departamento Almacen
	                        </button>
	                        <div class="panel"><p>
	                         Determinar la cantidad de cada producto que hay que almacenar, calcular la cantidad y la frecuencia con la que se solicitará cada pedido con el objetivo de disminuir al máximo los costes de almacenamiento.
	                        </p></div>
						</div>				
					</div>
					<div class="col-lg-6 offset-lg-1 services-header-img-section">
						</script>
				<lottie-player  src="https://assets3.lottiefiles.com/packages/lf20_Tcz0nk.json"  background="transparent"  speed="1"  style="width: 700px; height: 500px;"  loop  autoplay></lottie-player>
					</div>
				</div>
			</div>
			
			<div id="news"></div>
			<!-- NEWS -->
			<div class="blog-section" data-aos="fade-up">
				<div class="blog-section-right-bg">
					<img src="<?= media();?>/pagina/assets\images\blog-section-right-bg.png">
				</div>
				<div class="blog-section-left-bg">
					<img src="<?= media();?>/pagina/assets\images\blog-section-left-bg.png">
				</div>
				<div class="container blog-container">
					<div class="blog-title-section">
						<p class="blog-subtitle">Nuestros Servicios</p>
						<h2 class="blog-title">Gestiones Varias</h2>
					</div>
					<div class="blog-posts-section">
						<div class="col-lg-4 col-md-8 col-xs-10 blog-post-card-container">
							<div class="blog-post-card">
								<div class="blog-post-icon">
									<lottie-player src="https://assets6.lottiefiles.com/packages/lf20_gwwngxas.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop  autoplay></lottie-player>
								</div>
								<h3 class="blog-post-title">Otros</h3>
								<p class="blog-post-text">Making it easier to connect with every client worldwide</p>
								<a class="blog-post-link" href="#news">Read More</a>
							</div>
						</div>
						<div class="col-lg-4 col-md-8 col-xs-10 blog-post-card-container">
							<div class="blog-post-card">
								<div class="blog-post-icon mb-4">
									
<lottie-player src="https://assets7.lottiefiles.com/packages/lf20_597nlu.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop  autoplay></lottie-player>
								</div>
								<h3 class="blog-post-title">Sistema Transporte</h3>
                                <h4 class="blog-post-subtitle">Gestion Combustible</h4>
								<p class="blog-post-text mb-4">Gestion de solicitudes de servicios de vehiculos, accesorios entre otros mas..</p>
								<a class="nav-link learn-more-btn" href="http://192.168.0.72/transportes2021/transportes2/admin/" target="_blank">Ir a sistema</a>
							</div>
						</div>
						<div class="col-lg-4 col-md-8 col-xs-10 blog-post-card-container">
							<div class="blog-post-card">
								<div class="blog-post-icon">
									<lottie-player src="https://assets6.lottiefiles.com/packages/lf20_gwwngxas.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop  autoplay></lottie-player>
								</div>
								<h3 class="blog-post-title">Solicitud combustible</h3>
								<p class="blog-post-text">Solicitud de combustible descargarla.</p>
								<a class="blog-post-link" href="http://192.168.0.28/intranet/pdf/sol_combustible.pdf" target="_blank">Ir a solicitud</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- FOOTER -->
			<div class="footer-section"  data-aos="fade-up">
				<div class="footer-section-bg-graphics">
					<img src="<?= media();?>/pagina/assets\images\footer-section-bg.png">
				</div>
                <!-- Footer Column 1 -->
				<div class="container footer-container">
					<div class="col-lg-3 col-md-6 footer-logo">
						<!-- <img src="<?= media();?>/pagina/assets\images\logo_footer.png"> -->
						<p class="footer-susection-text">Division de Informatica<br>Departamento de desarrollo.</p>
					</div>
					
                    <!-- Footer Column 2 -->
					<div class="col-lg-3 col-md-6 footer-subsection">
						<h3 class="footer-subsection-title">Contactar</h3>
						<ul class="footer-subsection-list">
							<li>DIGICI<br>Dirección General de Inteligencia Civil.</li>
							<li>+502 30510756</li>
							<li>ajvasquez@digici.gob.gt</li>
						</ul>	
					</div>
                    <!-- Footer Column 3 -->
					<div class="col-lg-6 col-md-6 footer-subsection">
						<div class="footer-subsection-2-2">
							<h3 class="footer-subsection-title"></h3>
							<div class="footer-social-media-icons-section">
								
								<lottie-player src="https://assets6.lottiefiles.com/packages/lf20_gwwngxas.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop  autoplay></lottie-player>
								
							</div>
						</div>
					</div>
				</div>
                <!-- FOOTER CREDITS -->
				<div class="container footer-credits">
					<p>&copy; 2022 DIGICI&trade;. All Rights Reserved.</p>
				</div>
			</div>
		</div>

	<!-- FOOTER SCRIPTS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="<?= media();?>/pagina/assets\js\owl\owl.carousel.js"></script>
	<script src="<?= media();?>/pagina/assets\js\accordian.js"></script>
	<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  	<!-- Header scroll -->
  	<script>
  AOS.init();
</script>
		<script type="text/javascript">
				$(window).scroll(function() {
				    if ($(this).scrollTop() > 20) {
				      $('#navbar').addClass('header-scrolled');
				    } else {
				      $('#navbar').removeClass('header-scrolled');
				    }
				  });		
		</script>
		<script>
			$(document).ready(function(){
			  $(".owl-carousel").owlCarousel({
			  	items:4,
			  	loop:true,
			  	nav:true,
			  	autoplay:true,
			    autoplayTimeout:2000,
			    autoplayHoverPause:true,
			    responsiveClass:true,
			    responsive:{
			        0:{
			            items:1
			        },
			        600:{
			            items:3
			        },
			        1000:{
			            items:4
			        }
			    }
			  });
			});
	    </script>
	</body>
</html>