<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Cursos</title>
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
        $page = 'courses';
        include("NavBar.php")
    ?> 
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Cursos</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Inicio</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Cursos</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    <!-- startSearch-->
    <div class="container">
        <div class="row">
            <div class="col-3">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Todos Los Cursos</option>
                    <option value="1">Mis cursos</option>            
                </select>      
            </div>
            
            <div class="col-7">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Buscar" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-outline-primary" type="button" id="button-addon2"><i class="fa fa-search text-primary me-2"></i></button>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-8">
                <label>¿Quieres comprar uno de nuestros cursos?</label>
            </div>
            <div class="col-3">
                <a class="btn btn-outline-secondary" href="tienda.html" type="button" id="button-addon2">Ir a la tienda<i class="fa fa-shopping-cart text-primary me-2"></i></a>
            </div>
        </div>
    </div>
    <!--end search-->

    <!-- Courses Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase mb-2">Todos los Cursos</h6>
                <h1 class="display-6 mb-4">Todos nuestros cursos</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4">$100.00</div>
                            <h5 class="mb-3">Programación Web</h5>
                            <p>Aprende a realizar paginas web estaticas y dinamicas</p>
                            <ol class="breadcrumb justify-content-center mb-0">
                                <li class="breadcrumb-item small"><i class="fa fa-signal text-primary me-2"></i>Beginner</li>
                                <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i>3 Week</li>
                            </ol>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="img/curso1.jpg" alt="">
                            <div class="courses-overlay">
                                <a class="btn btn-outline-primary border-2" href="">Ver Más</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4">$150.00</div>
                            <h5 class="mb-3">Programación Orientada a Objetos</h5>
                            <p>Aprende el paradigma orientado a objetos de una forma entendible</p>
                            <ol class="breadcrumb justify-content-center mb-0">
                                <li class="breadcrumb-item small"><i class="fa fa-signal text-primary me-2"></i>Beginner</li>
                                <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i>3 Week</li>
                            </ol>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="img/curso2.png" alt="">
                            <div class="courses-overlay">
                                <a class="btn btn-outline-primary border-2" href="">Ver Más</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4">$100.00</div>
                            <h5 class="mb-3">Introducción a la Programación</h5>
                            <p>Aprende los conceptos básicos de la programación, desarrollaras pseudocodigos, diagramas de flujo y mas.</p>
                            <ol class="breadcrumb justify-content-center mb-0">
                                <li class="breadcrumb-item small"><i class="fa fa-signal text-primary me-2"></i>Beginner</li>
                                <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i>3 Week</li>
                            </ol>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="img/curso3.jpg" alt="">
                            <div class="courses-overlay">
                                <a class="btn btn-outline-primary border-2" href="">Ver Más</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4">$100.00</div>
                            <h5 class="mb-3">Matematicas 1</h5>
                            <p>Aprende lo basico de las matematicas sumas, restas, multiplicaciones y mas.</p>
                            <ol class="breadcrumb justify-content-center mb-0">
                                <li class="breadcrumb-item small"><i class="fa fa-signal text-primary me-2"></i>Beginner</li>
                                <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i>3 Week</li>
                            </ol>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="img/curso3.jpg" alt="">
                            <div class="courses-overlay">
                                <a class="btn btn-outline-primary border-2" href="">Ver Más</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4">$100.00</div>
                            <h5 class="mb-3">Biologia</h5>
                            <p>Aprende los conceptos basicos de la biologia.</p>
                            <ol class="breadcrumb justify-content-center mb-0">
                                <li class="breadcrumb-item small"><i class="fa fa-signal text-primary me-2"></i>Beginner</li>
                                <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i>3 Week</li>
                            </ol>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="img/curso3.jpg" alt="">
                            <div class="courses-overlay">
                                <a class="btn btn-outline-primary border-2" href="">Ver Más</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4">$100.00</div>
                            <h5 class="mb-3">Introducción a la Programación</h5>
                            <p>Aprende los conceptos básicos de la programación, desarrollaras pseudocodigos, diagramas de flujo y mas.</p>
                            <ol class="breadcrumb justify-content-center mb-0">
                                <li class="breadcrumb-item small"><i class="fa fa-signal text-primary me-2"></i>Beginner</li>
                                <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i>3 Week</li>
                            </ol>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="img/curso3.jpg" alt="">
                            <div class="courses-overlay">
                                <a class="btn btn-outline-primary border-2" href="">Ver Más</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
    </div>
    <!-- Courses End -->


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