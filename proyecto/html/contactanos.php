<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Cursos y Capacitaciones</title>        
        
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
		<?php  include ("Components/MenuBar.php"); ?>
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Contactanos</h1>
                    <p class="lead fw-normal text-white-50 mb-0">¡Resuelve tus Dudas o Comentarios!</p>
                </div>
            </div>
        </header>
        <!-- Section-->
		<div class="container">
			<div class="row">
				<div class="col-4">					
					<div class="container-fluid">
						<div class="row">
							<h5>Visitanos en nuestras redes sociales:</h5>
						</div>
						<div class="row">
							<div class="col-4">								
								<a href="http://www.facebook.com" target="_blank"><h1><i class="bi bi-facebook"></i></h1></a>
							</div>
							<div class="col-4">								
								<a href="www.instagram.com"><h1><i class="bi bi-instagram"></i></h1></a>
							</div>
							<div class="col-4">								
								<a href="www.twiter.cm"><h1><i class="bi bi-twitter"></i></h1></a>
							</div>
						</div>	
						<div class="row">
							<div class="col-12">
								<h5>O Comunicate</h5>
							</div>
						</div>
						<div class="row">
							<div class="col-12">
								<p>uneEjemplo@gmail.com</p>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-7">
					<form>
						<div class="container-fluid rounded-3">			
							<div class="row"> 				
								<div class="mb-3">
								  <label for="exampleFormControlInput1" class="form-label">Nombre(s):</label>
								  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Ejemp. Juan Jose">
								</div>
							</div>
							<div class="row"> 				
								<div class="mb-3">
								  <label for="exampleFormControlInput1" class="form-label">Primer Apellido:</label>
								  <input type="email" class="form-control" id="exampleFormControlInput5" placeholder="Ejemp. Ramirez">
								</div>
							</div>
							<div class="row"> 				
								<div class="mb-3">
								  <label for="exampleFormControlInput1" class="form-label">Segundo Apellido:</label>
								  <input type="email" class="form-control" id="exampleFormControlInput4" placeholder="Ejemp. Ramirez">
								</div>
							</div>
							<div class="row"> 				
								<div class="mb-3">
								  <label for="exampleFormControlInput1" class="form-label">Email:</label>
								  <input type="email" class="form-control" id="exampleFormControlInput3" placeholder="Ejemp. name@example.com">
								</div>
							</div>
							<div class="row"> 				
								<div class="mb-3">
								  <label for="exampleFormControlInput1" class="form-label">Asunto:</label>
								  <input type="email" class="form-control" id="exampleFormControlInput2" placeholder="Ejemp. Duda">
								</div>
							</div>
							<div class="row">
								<div class="mb-3">
								  <label for="exampleFormControlTextarea1" class="form-label">Comentarios:</label>
								  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
								</div>
							</div>
							<div class="row">
								<div class="col-auto">
									<button type="submit" class="btn btn-primary mb-3">Enviar</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
        <!-- Footer-->
		<?php
        include ("Components/footer.php");
        ?>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
      
    </body>
</html>
