<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />       
        
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!--Barra de menu-->         
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="">Cursos y Capacitaciones</a>
				
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
				
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-3 mb-lg-0 ms-lg-5">
						<li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Cursos</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="index.php">Mostrar Todo</a></li>
                                <li><a class="dropdown-item" href="#">Mis Cursos</a></li>
                                <li><hr class="dropdown-divider" /></li>                               
                                
                                <li><a class="dropdown-item" href="AgregarCurso.php">Agregar Nuevo Curso</a></li>
                               
                            </ul>
                        </li>                       
						<li class="nav-item"><a class="nav-link" aria-current="page" href="contactanos.php">Contactanos</a></li>                       
						<li class="nav-item"><a class="nav-link" aria-current="page" href="Blog.php">Blog</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!"></a></li>                        
						<li class="nav-item"><a class="nav-link" aria-current="page" href="AcercaDe.html">Acerca de</a></li>	                        
					</ul> 
                    <form class="d-flex">
                        <div class="input-group mb-20">							  
                            <input type="search" class="form-control" placeholder="¿Que quieres aprender?" aria-label="search">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon1"><i class="bi bi-search"></i> </button>
                        </div>
                    </form>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <form class="d-flex"> 
                        <button class="btn btn-outline-dark" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Carrito
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        </button>
                    </form>
					
                </div>
                </div>                
            </div>
        </nav>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>