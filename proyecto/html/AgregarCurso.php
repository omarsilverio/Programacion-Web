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
        <!-- Navigation-->
        <?php
        include ("Components/MenuBar.php");
        ?>

        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Cursos y Capacitaciones</h1>
                    <p class="lead fw-normal text-white-50 mb-0">¡Cursos y Capacitaciones Totalmente Gratis!</p>
                </div>
            </div>
        </header>
        <div class="container">         
            
            <form>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nombre curso</label>
                    <input type="email" class="form-control" id="nombreCurso" name="nombreCurso">
                    <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Total Estrellas</label>
                    <input type="number" class="form-control" id="total_estrellas" name="total_estrellas">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Total Puntos</label>
                    <input type="number" class="form-control" id="total_puntos" name="total_puntos">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Precio</label>
                    <input type="number" class="form-control" id="precio" name="precio">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Descripción</label>
                    <textarea class="form-control" id="descripcion" rows="4" name="descripcion"></textarea>
                </div>

                <div>
                    <h6>Lista de temas</h6>
                    <ul class="list-group">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Morbi leo risus</li>
                        <li class="list-group-item">Porta ac consectetur ac</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                  <button type="button" class="btn btn-primary">Agregar Tema</button>
                </div>

                  <div>                    
                    <button type="submit" class="btn btn-primary">Agregar Curso</button>
                  </div>
                
            </form>

       </div>
        <!-- Footer-->
        <?php
        include ("Components/footer.php");
        ?>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
      
    </body>
</html>
