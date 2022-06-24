<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dudas y Suferencias</title>
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
</head>

<body>
    <?php 
        $page = 'addCourse';
        include("NavBar.php");
    ?>
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Dudas y Sugerencias</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Inicio</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Cursos</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Agregar Curso</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 450px;">
                    <div class="position-relative h-100">
                        <img class="w-100" src="img/teacher.jpeg" alt="Image">                        
                    </div>                    
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <h6 class="text-primary text-uppercase mb-2">¿Eres profesor?</h6>
                    <h1 class="display-6 mb-4">¿Quieres agregar un nuevo curso?</h1>
                    <p class="mb-4">Rellena todos los campos para insertar un nuevo curso</p>
                    <form>
                        <div class="row g-3">
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 bg-light" id="nombre" name="nombre" placeholder="Your Name" required>
                                    <label for="nombre">Nombre del Curso</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="number" class="form-control border-0 bg-light" id="total_estrellas" name="total_estrellas" placeholder="Total Puntos" required>
                                    <label for="totalstart">Total Estrellas</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="number" class="form-control border-0 bg-light" id="total_puntos" name="total_puntos" placeholder="Total Puntos" required>
                                    <label for="totalpoints">Total Puntos</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="number" class="form-control border-0 bg-light" id="precio" name="precio" placeholder="Precio" required>
                                    <label for="sale">Precio</label>
                                </div>
                            </div> 
                            <div class="col-md-12">
                            <label for="sale">Seleccione una imagen descriptiva</label>
                                <div class="form-floating">                                
                                    <input type="file" accept=".jpeg, .jpg, .png" required>                                    
                                </div>
                            </div>                            
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control border-0 bg-light" placeholder="Descripcion" id="descripcion" name="descripcion" style="height: 150px" required></textarea>
                                    <label for="description">Descripción</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary py-3 px-5" type="submit">Guardar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Footer Start -->
    <?include("Footer.php")?>

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