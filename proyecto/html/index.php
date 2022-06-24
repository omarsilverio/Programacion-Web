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


    <!-- Todo esto agregre para mostar con estilos el modal-->

    



<!-- Todo esto agregre para mostar con estilos el modal-->


</head>

<body>
    <!--Navbar start-->
    <?php
     session_start();
     if(isset( $_SESSION['conectado'])){
     $_SESSION['conectado'];
     $_SESSION['nombre'];
}	
    $page = 'index';
    
    include("NavBar.php")
   
    ?>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-3.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7">
                                    <h1 class="display-2 text-light mb-5 animated slideInDown">Aprenda Online, Resuelva Sus Dudas</h1>
                                    <a href="" class="btn btn-primary py-sm-3 px-sm-5">Suscribirse Ahora</a>
                                    <a href="courses.php" class="btn btn-light py-sm-3 px-sm-5 ms-3">Nuestros Cursos</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-4.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7">
                                    <h1 class="display-2 text-light mb-5 animated slideInDown">Cursos Con Los Mejores Precios</h1>
                                    <a href="" class="btn btn-primary py-sm-3 px-sm-5">Suscribirse Ahora</a>
                                    <a href="courses.php" class="btn btn-light py-sm-3 px-sm-5 ms-3">Nuestros Cursos</a>
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


    <!-- Facts Start -->
    <div class="container-fluid facts py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="bg-white shadow d-flex align-items-center h-100 p-4" style="min-height: 150px;">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square bg-primary">
                                <i class="fa fa-car text-white"></i>
                            </div>
                            <div class="ps-4">
                                <h5>Suscripción Gratuia</h5>
                                <span>¡La suscripción es totalmente gratis!</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="bg-white shadow d-flex align-items-center h-100 p-4" style="min-height: 150px;">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square bg-primary">
                                <i class="fa fa-users text-white"></i>
                            </div>
                            <div class="ps-4">
                                <h5>Cursos Con Los Mejores Precios</h5>
                                <span>cursos baratos para que aprendas mas</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-white shadow d-flex align-items-center h-100 p-4" style="min-height: 150px;">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square bg-primary">
                                <i class="fa fa-file-alt text-white"></i>
                            </div>
                            <div class="ps-4">
                                <h5>Resuelve tus dudas</h5>
                                <span>Resuelve Tus Dudas Por Correo, Te Contestamos Lo Mas Rápido Posible</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->


    <!-- About Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative overflow-hidden ps-5 pt-5 h-100" style="min-height: 400px;">
                        <img class="position-absolute w-100 h-100" src="img/about-4.jpg" alt="" style="object-fit: cover;">
                        <img class="position-absolute top-0 start-0 bg-white pe-3 pb-3" src="img/about-3.jpg" alt="" style="width: 200px; height: 200px;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        
                        <h1 class="display-6 mb-4">Ayudamos a los usuarios a entender cursos de nivel básico y avanzado</h1>                        
                        <p class="mb-4">Los cursos estan diseñados para personas que quieran aprender temas de nivel básico y temas de programación</p>
                        <div class="row g-2 mb-4 pb-2">
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>Confiabilidad
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>Precios Justos
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>Información Clara 
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>Disponibilidad
                            </div>
                        </div>
                        <div class="row g-4">
                            <!--
                            <div class="col-sm-6">
                                <a class="btn btn-primary py-3 px-5" href="">Read More</a>
                            </div>-->
                            <div class="col-sm-6">
                                <a class="d-inline-flex align-items-center btn btn-outline-primary border-2 p-2" href="tel:+0123456789">
                                    <span class="flex-shrink-0 btn-square bg-primary">
                                        <i class="fa fa-phone-alt text-white"></i>
                                    </span>
                                    <span class="px-3">cursosycapacitacionesonline@gmail.com</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Courses Start -->
    <div class="container-xxl courses my-6 py-6 pb-0">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase mb-2">Cursos Mas Solicitados</h6>
                <h1 class="display-6 mb-4">Cursos Con Mayor Demanda Gracias a la Claridad de Estos</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4">$100.00</div>
                            <h5 class="mb-3">Programación Web</h5>
                            <p>Aprende a realizar paginas web estaticas y dinamicas</p>
                            <ol class="breadcrumb justify-content-center mb-0">
                                <li class="breadcrumb-item small"><i class="fa fa-signal text-primary me-2"></i>Basico</li>
                                <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i>3 Semanas</li>
                            </ol>
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="img/curso1.jpg" alt="">
                            <div class="courses-overlay">
                                <a href="#" id="abrir" class="btn btn-outline-primary border-2" >Ver Más</a>
                            </div>                        
                        </div>


                        
                        <dialog id="modal" >
		                        <div class="flex" id="flex">
			                        <div class="contenido">
				                        <div class="modal-header flex">
					                        <h2>Programación Web</h2>
					                        <a href="#" id="close" class="btn btn-outline-primary border-2" >X</a>
				                        </div>
				                        <div class="modal-body">

                                        <section _ngcontent-ofb-c90="" class="detail-about"><div _ngcontent-ofb-c90="" class="detail-about__wrapper">
                                            <div _ngcontent-ofb-c90="" class="detail-about__content"><div _ngcontent-ofb-c90="" class="detail-about__detail">
                                                <span _ngcontent-ofb-c90="" class="detail-about__detail-title">Detalles del curso</span>
                                                <div _ngcontent-ofb-c90="" class="detail-about__detail-items">
                                                <span _ngcontent-ofb-c90="" class="detail-about__detail-icon-container">
                                                <mat-icon _ngcontent-ofb-c90="" role="img" class="mat-icon notranslate detail-about__detail-icon material-icons mat-icon-no-color" aria-hidden="true" data-mat-icon-type="font">reorder</mat-icon>
                                                <span _ngcontent-ofb-c90="" class="detail-about__detail-copy">Módulos: 2</span></span>
                                                <span _ngcontent-ofb-c90="" class="detail-about__detail-icon-container">
                                                <mat-icon _ngcontent-ofb-c90="" role="img" class="mat-icon notranslate detail-about__detail-icon material-icons mat-icon-no-color" aria-hidden="true" data-mat-icon-type="font">access_time</mat-icon>
                                                <span _ngcontent-ofb-c90="" class="detail-about__detail-copy">Horas: 1.5</span></span>
                                                <span _ngcontent-ofb-c90="" class="detail-about__detail-icon-container">
                                                <img _ngcontent-ofb-c90="" role="presentation" alt="" class="detail-about__detail-icon" src="/static/digital-workshop/assets/icons/level-beginner.svg">
                                                <span _ngcontent-ofb-c90="" class="detail-about__detail-copy">Principiante</span></span>
                                                <span _ngcontent-ofb-c90="" class="detail-about__detail-icon-container">
                                                <img _ngcontent-ofb-c90="" src="/static/digital-workshop/assets/icons/free-course.svg" role="presentation" alt="" class="detail-about__detail-icon">
                                                <span _ngcontent-ofb-c90="" class="detail-about__detail-copy">Sin coste</span></span></div></div>
                                                <div _ngcontent-ofb-c90="" class="detail-about__features ng-star-inserted">
                                                <span _ngcontent-ofb-c90="" class="detail-about__features-title">Características del curso</span><div _ngcontent-ofb-c90="">
                                            <ul>
                                                <li>Tutoriales en vídeo </li>
                                                <li>Consejos fáciles de aplicar</li>
                                                <li>Evaluaciones al finalizar cada tema</li>
                                                <li>Acceso ilimitado</li>
                                            </ul>
                                            </div></div><!----><div _ngcontent-ofb-c90="" class="detail-about__info ng-star-inserted">
                                            <h2 _ngcontent-ofb-c90="" class="detail-about__info-title">Acerca de este curso</h2>
                                            <p _ngcontent-ofb-c90="" class="detail-about__info-description ng-star-inserted">
                                            
                                            Los últimos avances en Internet han revolucionado la forma en que se conciben los sistemas de información empresariales, y la Web se ha convertido en el marco de publicación y explotación de todo tipo de contenidos y recursos multimedia, que constituyen el canal fundamental de comunicación entre la empresa y el consumidor.

Esta asignatura se centra en el estudio de HTML5 como lenguaje de implementación de hipertexto e hipermedia de mayor auge en la actualidad. La asignatura cubre el estudio de los sistemas y arquitecturas actuales para la distribución de información multimedia, los estándares y protocolos para la inclusión de imagen, audio y video en los portales web, generación dinámica de contenidos y animaciones, así como el uso de bibliotecas digitales y tecnologías de desarrollo de aplicaciones multimedia multi-plataforma.

Es recomendable para el aprovechamiento de esta asignatura tener conocimientos de redes de computadores, de sistemas distribuidos y de interacción usuario-computador.

                                            
                                            
                                            
                                            
                                            </p>
                                            <!----><!----></div><!----><!----></div></div></section>

			
				                        </div>
			                        </div>
		                        </div>
                         </dialog>
	                    <script src="js/scriptmodal.js"></script>


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
                            <a href="#" id="abrir" class="btn btn-outline-primary border-2" >Ver Más</a>
                            </div>
                        </div>                       

                        <dialog id="modal" >
		                        <div class="flexpoo" id="flexpoo">
			                        <div class="contenido-modal">
				                        <div class="modal-header flex">
					                        <h2>Programación Orientada a Objetos</h2>
					                        <a href="#" id="close" class="btn btn-outline-primary border-2" >X</a>
				                        </div>
				                        <div class="modal-body">

                                        <section _ngcontent-ofb-c90="" class="detail-about"><div _ngcontent-ofb-c90="" class="detail-about__wrapper">
                                            <div _ngcontent-ofb-c90="" class="detail-about__content"><div _ngcontent-ofb-c90="" class="detail-about__detail">
                                                <span _ngcontent-ofb-c90="" class="detail-about__detail-title">Detalles del curso</span>
                                                <div _ngcontent-ofb-c90="" class="detail-about__detail-items">
                                                <span _ngcontent-ofb-c90="" class="detail-about__detail-icon-container">
                                                <mat-icon _ngcontent-ofb-c90="" role="img" class="mat-icon notranslate detail-about__detail-icon material-icons mat-icon-no-color" aria-hidden="true" data-mat-icon-type="font">reorder</mat-icon>
                                                <span _ngcontent-ofb-c90="" class="detail-about__detail-copy">Módulos: 2</span></span>
                                                <span _ngcontent-ofb-c90="" class="detail-about__detail-icon-container">
                                                <mat-icon _ngcontent-ofb-c90="" role="img" class="mat-icon notranslate detail-about__detail-icon material-icons mat-icon-no-color" aria-hidden="true" data-mat-icon-type="font">access_time</mat-icon>
                                                <span _ngcontent-ofb-c90="" class="detail-about__detail-copy">Horas: 1.5</span></span>
                                                <span _ngcontent-ofb-c90="" class="detail-about__detail-icon-container">
                                                <img _ngcontent-ofb-c90="" role="presentation" alt="" class="detail-about__detail-icon" src="/static/digital-workshop/assets/icons/level-beginner.svg">
                                                <span _ngcontent-ofb-c90="" class="detail-about__detail-copy">Principiante</span></span>
                                                <span _ngcontent-ofb-c90="" class="detail-about__detail-icon-container">
                                                <img _ngcontent-ofb-c90="" src="/static/digital-workshop/assets/icons/free-course.svg" role="presentation" alt="" class="detail-about__detail-icon">
                                                <span _ngcontent-ofb-c90="" class="detail-about__detail-copy">Sin coste</span></span></div></div>
                                                <div _ngcontent-ofb-c90="" class="detail-about__features ng-star-inserted">
                                                <span _ngcontent-ofb-c90="" class="detail-about__features-title">Características del curso</span><div _ngcontent-ofb-c90="">
                                            <ul>
                                                <li>Tutoriales en vídeo </li>
                                                <li>Consejos fáciles de aplicar</li>
                                                <li>Evaluaciones al finalizar cada tema</li>
                                                <li>Acceso ilimitado</li>
                                            </ul>
                                            </div></div><!----><div _ngcontent-ofb-c90="" class="detail-about__info ng-star-inserted">
                                            <h2 _ngcontent-ofb-c90="" class="detail-about__info-title">Acerca de este curso</h2>
                                            <p _ngcontent-ofb-c90="" class="detail-about__info-description ng-star-inserted">
                                            
                                            La Programación Orientada a Objetos (POO) es un paradigma de programación, es decir, un modelo o un estilo de programación que nos da unas guías sobre cómo trabajar con él. Se basa en el concepto de clases y objetos. Este tipo de programación se utiliza para estructurar un programa de software en piezas simples y reutilizables de planos de código (clases) para crear instancias individuales de objetos. 

A lo largo de la historia, han ido apareciendo diferentes paradigmas de programación. Lenguajes secuenciales como COBOL o procedimentales como Basic o C, se centraban más en la lógica que en los datos. Otros más modernos como Java, C# y Python, utilizan paradigmas para definir los programas, siendo la Programación Orientada a Objetos la más popular. 

Con el paradigma de Programación Orientado a Objetos lo que buscamos es dejar de centrarnos en la lógica pura de los programas, para empezar a pensar en objetos, lo que constituye la base de este paradigma. Esto nos ayuda muchísimo en sistemas grandes, ya que en vez de pensar en funciones, pensamos en las relaciones o interacciones de los diferentes componentes del sistema.

Un programador diseña un programa de software organizando piezas de información y comportamientos relacionados en una plantilla llamada clase. Luego, se crean objetos individuales a partir de la plantilla de clase. Todo el programa de software se ejecuta haciendo que varios objetos interactúen entre sí para crear un programa más grande.
                                            
                                            
                                            
                                            </p>
                                            <!----><!----></div><!----><!----></div></div></section>

			
				                        </div>
			                        </div>
		                        </div>
</dialog>
	                    <script src="js/scriptmodal.js"></script>

                        

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
                            <a href="#" id="abrir" class="btn btn-outline-primary border-2" >Ver Más</a>
                            </div>
                        </div>

                        
                        <dialog id="modal" >
		                        <div class="flex" id="flex">
			                        <div class="contenido-modal">
				                        <div class="modal-header flex">
					                        <h2>Introduccion a la Programación</h2>
					                        <a href="#" id="close" class="btn btn-outline-primary border-2" >X</a>
				                        </div>
				                        <div class="modal-body">

                                        <section _ngcontent-ofb-c90="" class="detail-about"><div _ngcontent-ofb-c90="" class="detail-about__wrapper">
                                            <div _ngcontent-ofb-c90="" class="detail-about__content"><div _ngcontent-ofb-c90="" class="detail-about__detail">
                                                <span _ngcontent-ofb-c90="" class="detail-about__detail-title">Detalles del curso</span>
                                                <div _ngcontent-ofb-c90="" class="detail-about__detail-items">
                                                <span _ngcontent-ofb-c90="" class="detail-about__detail-icon-container">
                                                <mat-icon _ngcontent-ofb-c90="" role="img" class="mat-icon notranslate detail-about__detail-icon material-icons mat-icon-no-color" aria-hidden="true" data-mat-icon-type="font">reorder</mat-icon>
                                                <span _ngcontent-ofb-c90="" class="detail-about__detail-copy">Módulos: 2</span></span>
                                                <span _ngcontent-ofb-c90="" class="detail-about__detail-icon-container">
                                                <mat-icon _ngcontent-ofb-c90="" role="img" class="mat-icon notranslate detail-about__detail-icon material-icons mat-icon-no-color" aria-hidden="true" data-mat-icon-type="font">access_time</mat-icon>
                                                <span _ngcontent-ofb-c90="" class="detail-about__detail-copy">Horas: 1.5</span></span>
                                                <span _ngcontent-ofb-c90="" class="detail-about__detail-icon-container">
                                                <img _ngcontent-ofb-c90="" role="presentation" alt="" class="detail-about__detail-icon" src="/static/digital-workshop/assets/icons/level-beginner.svg">
                                                <span _ngcontent-ofb-c90="" class="detail-about__detail-copy">Principiante</span></span>
                                                <span _ngcontent-ofb-c90="" class="detail-about__detail-icon-container">
                                                <img _ngcontent-ofb-c90="" src="/static/digital-workshop/assets/icons/free-course.svg" role="presentation" alt="" class="detail-about__detail-icon">
                                                <span _ngcontent-ofb-c90="" class="detail-about__detail-copy">Sin coste</span></span></div></div>
                                                <div _ngcontent-ofb-c90="" class="detail-about__features ng-star-inserted">
                                                <span _ngcontent-ofb-c90="" class="detail-about__features-title">Características del curso</span><div _ngcontent-ofb-c90="">
                                            <ul>
                                                <li>Tutoriales en vídeo </li>
                                                <li>Consejos fáciles de aplicar</li>
                                                <li>Evaluaciones al finalizar cada tema</li>
                                                <li>Acceso ilimitado</li>
                                            </ul>
                                            </div></div><!----><div _ngcontent-ofb-c90="" class="detail-about__info ng-star-inserted">
                                            <h2 _ngcontent-ofb-c90="" class="detail-about__info-title">Acerca de este curso</h2>
                                            <p _ngcontent-ofb-c90="" class="detail-about__info-description ng-star-inserted">
                                            Si tuvieramos que resumir el propósito de la programación en una frase, ésta debería ser:

que el computador haga el trabajo por nosotros.
Los computadores son buenos para hacer tareas rutinarias. Idealmente, cualquier problema tedioso y repetitivo debería ser resuelto por un computador, y los seres humanos sólo deberíamos encargarnos de los problemas realmente interesantes: los que requieren creatividad, pensamiento crítico y subjetividad.

La programación es el proceso de transformar un método para resolver problemas en uno que pueda ser entendido por el computador.
                                            
                                            
                                            
                                            </p>
                                            <!----><!----></div><!----><!----></div></div></section>

			
				                        </div>
			                        </div>
		                        </div>
                         </dialog>
	                    <script src="js/scriptmodal.js"></script>

                    </div>
                </div>                
            </div>
        </div>
    </div>
    <!-- Courses End -->
    <!-- Testimonial Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase mb-2">Comentarios</h6>
                <h1 class="display-6 mb-4">¡Comentarios de nuestros usuarios!</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-5">
                                <img class="img-fluid rounded-circle mx-auto" src="img/testimonial-1.jpg" alt="">
                                <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle" style="width: 60px; height: 60px;">
                                    <i class="fa fa-quote-left fa-2x text-primary"></i>
                                </div>
                            </div>
                            <p class="fs-4">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.</p>
                            <hr class="w-25 mx-auto">
                            <h5>Client Name</h5>
                            <span>Profession</span>
                        </div>
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-5">
                                <img class="img-fluid rounded-circle mx-auto" src="img/testimonial-2.jpg" alt="">
                                <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle" style="width: 60px; height: 60px;">
                                    <i class="fa fa-quote-left fa-2x text-primary"></i>
                                </div>
                            </div>
                            <p class="fs-4">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.</p>
                            <hr class="w-25 mx-auto">
                            <h5>Client Name</h5>
                            <span>Profession</span>
                        </div>
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-5">
                                <img class="img-fluid rounded-circle mx-auto" src="img/testimonial-3.jpg" alt="">
                                <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle" style="width: 60px; height: 60px;">
                                    <i class="fa fa-quote-left fa-2x text-primary"></i>
                                </div>
                            </div>
                            <p class="fs-4">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.</p>
                            <hr class="w-25 mx-auto">
                            <h5>Client Name</h5>
                            <span>Profession</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


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