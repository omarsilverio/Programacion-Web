<!DOCTYPE html>
<html lang="en">
    <head>
    <link href="css/font.css" rel="stylesheet">  
    <link href="css/main.css" rel="stylesheet">  
         
    </head>
    <body>
         <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>            
        </div>
        <!-- Spinner End -->

        <!--social-bar-->        
        <div class="social-bar">
            <a href="https://www.facebook.com/" class="icon icon-facebook" target="_blank"></a>
            <a href="https://twitter.com/?lang=es" class="icon icon-twitter" target=_blank></a>
            <a href="https://www.instagram.com/" class="icon icon-instagram" target=_blank></a>
        </div>
        
        <!-- end social-bar-->
        

        <!-- Topbar Start
        <div class="container-fluid bg-dark text-light p-0">
            <div class="row gx-0 d-none d-lg-flex">
                <div class="col-lg-7 px-5 text-start">
                    <div class="h-100 d-inline-flex align-items-center me-4">
                        <small class="fa fa-map-marker-alt text-primary me-2"></small>
                        <small>Oaxaca de juarez, Oax</small>
                    </div>
                    <div class="h-100 d-inline-flex align-items-center">
                        <small class="far fa-clock text-primary me-2"></small>
                        <small>
                            <?php
                            $DateAndTime = date('d-m-Y h:i:s a', time());  
                            echo "$DateAndTime.";
                            ?>
                        </small>
                    </div>
                </div>
                <div class="col-lg-5 px-5 text-end">
                    <div class="h-100 d-inline-flex align-items-center me-4">
                        <small class="fa fa-phone-alt text-primary me-2"></small>
                        <small>951-123-145-6</small>
                    </div>
                    <div class="h-100 d-inline-flex align-items-center mx-n2">
                        <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href="https://twitter.com/?lang=es"><i class="fab fa-twitter" target="_blank"></i></a>                        
                        <a class="btn btn-square btn-link rounded-0" href=""><i class="fab fa-instagram" href="https://www.instagram.com/" target="_blank"></i></a>
                    </div>
                </div>
            </div>
        </div>-->
        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
            <a href="index.php" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
                <h2 class="m-0"><i class="fa fa-book text-primary me-2"></i>Cursos Online</h2>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="index.php" class="nav-item nav-link <?php if($page=='index'){echo 'active';}?>">Inicio</a>
                    <a href="courses.php" class="nav-item nav-link <?php if($page=='courses'){echo 'active';}?>">Cursos</a>
                    <a href="contact.php" class="nav-item nav-link <?php if($page=='contact'){echo 'active';}?>">Dudas y Sugerencias</a>
                    <a href="blog/blog-1.php" class="nav-item nav-link">Blog</a>
                    <a href="about.php" class="nav-item nav-link <?php if($page=='about'){echo 'active';}?>">Acerca de</a>                   

                   <!-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle <?php if($page=='addCourse'){echo 'active';}?>" data-bs-toggle="dropdown">Admin</a>
                        <div class="dropdown-menu bg-light m-0">
                            <a href="addCourse.php" class="dropdown-item">Agregar Curso</a>
                            <a href="appointment.html" class="dropdown-item">Appointment</a>
                            <a href="team.html" class="dropdown-item">Our Team</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            <a href="404.html" class="dropdown-item">404 Page</a>
                        </div>-->
                    </div>
                    
                </div>
                <a href="RegistroAlumno.php" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Iniciar Sesión<i class="fa fa-arrow-right ms-3"></i></a>
            </div>
        </nav>
    </body>
</html>
