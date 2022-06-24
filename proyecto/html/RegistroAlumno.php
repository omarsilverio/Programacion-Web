<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Cursos y Cacitaciones</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
	
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
	
</head>

<body>
    <!--Navbar start-->
    <?php
    include("NavBar.php")
    ?>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-3.jpeg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7">
                                    <h1 class="display-2 text-light mb-5 animated slideInDown">Accede a tu cuenta para ver tus cursos</h1>
                                    
                                    <a href="/ProyectoFinalWeb/Programacion-Web/proyecto/html/courses.php" class="btn btn-light py-sm-3 px-sm-5 ms-3">Nuestros Cursos</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-4.jpeg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7">
                                    <h1 class="display-2 text-light mb-5 animated slideInDown">Registrate para tener acceso a contenido increible</a>
                                    <a href="/ProyectoFinalWeb/Programacion-Web/proyecto/html/courses.php" class="btn btn-light py-sm-3 px-sm-5 ms-3">Nuestros Cursos</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->



 <!-- Contact Start -->
  <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5">
				
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 450px;">
				<div class="elementor-posts-container elementor-posts elementor-posts--skin-cards elementor-grid elementor-has-item-ratio">
		                <h1>Datos del usuario</h1>
                    </div>
					<form action="/Programacion-Web/proyecto/php/phpFormularioAlumno.php" name="" method="POST">
						<div class="container-fluid rounded-3">			
							<div class="row"> 				
								<div class="mb-3">
								  <label for="nombre" class="form-label">Nombre(s):</label>
								  <input required="" type="text" class="form-control" id="nombre" name="nombre" placeholder="Ejemp. Juan Jose">
								</div>
							</div>
							<div class="row"> 				
								<div class="mb-3">
								  <label for="apellido_paterno" class="form-label">Primer Apellido:</label>
								  <input required="" type="text" class="form-control" id="apellido_paterno" name="apellido_paterno" placeholder="Ejemp. Ramirez">
								</div>
							</div>
							<div class="row"> 				
								<div class="mb-3">
								  <label for="apellido_materno" class="form-label">Segundo Apellido:</label>
								  <input required="" type="text" class="form-control" id="apellido_materno" name="apellido_materno" placeholder="Ejemp. Ramirez">
								</div>
							</div>
							<div class="row"> 				
								<div class="mb-3">
								  <label for="fehca_nacimiento" class="form-label">Fecha de nacimiento:</label>
								  <input required="" type="date" class="form-control" id="fehca_nacimiento" name="fehca_nacimiento" placeholder="Ejemp. 01/01/2022">
								</div>
							</div>
							<div class="row"> 				
								<div class="mb-3">
								  <label for="correo" class="form-label">Email:</label>
								  <input required="" type="email" class="form-control" id="correo" name="correo" placeholder="Ejemp. name@example.com">
								</div>
							</div>
							<div class="row"> 				
								<div class="mb-3">
								  <p style="font-size: 16px" class="form-label" >Para completar su registro , cree un nombre de usuario unico y asigne una contraseña</p>		 
								</div>
							</div>
							<div class="row"> 				
								<div class="mb-3">
								  <label for="usuario" class="form-label">Usuario:</label>
								  <input required="" type="text" class="form-control" id="usuario"  name="usuario" placeholder="Ejemp. usuario$123">
								</div>
							</div>
							<div class="row">
								<div class="mb-3">
								  <label for="contrasenia" class="form-label">Contraseña:</label>
								  <input required="" type="password" class="form-control" id="contrasenia" id="contrasenia" name="contrasenia" placeholder="**********">
								</div>
							</div>
							<div class="row">
								<div class="mb-3">
								  <label for="Ccontrasenia" class="form-label">Confirmar contraseña:</label>
								  <input required="" type="password" class="form-control" id="Ccontrasenia" name="Ccontrasenia" placeholder="**********">
								</div>
							</div>
                            <div class="col-12">
                                 <div class="g-recaptcha" data-sitekey="6LdgnZogAAAAAKdKqw3edggkXy86Zvxvm84ZjhQk"></div>
                            </div>
							<div  alaign="center" class="row">
								<div alaign="center" class="col-auto">
									<button  type="submit" class="btn btn-primary mb-3">Enviar</button>
									
									<button type="reset" class="btn btn-primary mb-3">Cancelar</button>
								</div>
							</div>
						</div>
					</form>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
				<div>
				<div>
					<img  width="700px" heigh="1700px" src="img/iniciosesion.png" alt="imagen de una libreta">
                </div>
                <br>
                <br>
                <div alaign="center" class="col-auto">																	
                    <h2 aling="center"> Ya tienes una cuenta? </h2>
                    <a href="#" id="abrir" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block" ><i class="fa fa-arrow-right ms-3"></i>Ingresar</a>
                </div>
                <dialog id="modal" >
		                        <div class="flex" id="flex">
			                        <div class="contenido">
				                        <div class="modal-header flex">
					                        <h2>Inicio de Sesion     </h2>
                                            <tab>
					                        <a href="#" id="close" class="btn btn-outline-primary border-2" >X</a>
				                        </div>
				                        <div class="modal-body">
                                            <form action="/Programacion-Web/proyecto/php/iniciosesion.php" name="" method="POST">
                                            <div class="row"> 				
								                <div class="mb-3">
								                <label for="usuario" class="form-label">Usuario:</label>
								                <input required="" type="text" class="form-control" id="usuario"  name="usuario" placeholder="Ejemp. usuario$123">
								            </div>
							            </div>
							            <div class="row">
								        <div class="mb-3">
								            <label for="contrasenia" class="form-label">Contraseña:</label>
								            <input required="" type="password" class="form-control" id="contrasenia" id="contrasenia" name="contrasenia" placeholder="**********">
								        </div>
							            </div>


                                        <div alaign="center" class="col-auto">
								        	<button aling="center" type="submit" class="btn btn-primary mb-3">Acceder</button>
								        </div>
                                            </form>

			
				                        </div>
			                        </div>
		                 </div>
                    </dialog>
	                    <script src="js/LoginModal.js"></script>
                        <script src="js/modalinicio.js"></script>
            </div>
        </div>
    </div>
    <!-- Contact End -->
 </div>
 </div>

   






   <?php include("Footer.php")?>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>