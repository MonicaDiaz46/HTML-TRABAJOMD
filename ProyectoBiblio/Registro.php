<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <title>BIBLIOTECA WIKIKAMO</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="shortcut icon" href="IMG/LogoRe.gif"/>
        <link rel="stylesheet" href="css/Estilos.css">
       
    </head>
    <body>
        <header> 
            <nav class="navbar Barra-nav">
                <a class="navbar-brand B1" href="index.php"> 
                    <img  src="IMG/Registros.png" class="d-inline-block align-top Logo" alt=""> 
                    <h2> <i>Registrate!</i></h2>
                </a>
            </nav>
        </header>
        <section>
            <div id="nav2" class="container">
                <form onsubmit="return Validacion();" 
                    class="mt-5 my-5 shadow p-3 mb-5 bg-white rounded" action="validarRegistro.php" method="post">
                    <h3  id="R" class="titulo-form">REGISTRO DE LECTORES</h3>
                     <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="documento">Documento de Identidad</label>
                            <input type="text" class="form-control" id="Documento" placeholder="Documento" name="Documento" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="Nombre" placeholder="Nombre" name="Nombre">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="apellido">Apellidos</label>
                            <input type="text" class="form-control" id="Apellido" placeholder="Apellidos" name="Apellido">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="telefono">Telefono</label>
                            <input type="text" class="form-control" id="Telefono" placeholder="Telefono" name="Telefono">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="Direccion">Dirección</label>
                            <input type="text" class="form-control" id="Direccion" placeholder="Dirección" name="Direccion">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Correo Electronico</label>
                        <input type="email" class="form-control" id="Email" placeholder="kurs@gmail....." name="Email">
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="Terminos" name="acepta">
                            <label class="form-check-label" for="gridCheck">
                              Acepta Terminos y condiciones.
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-enviar">Enviar</button>
              </form>
            </div>
        </section>
        <footer>
            
        </footer>
        
        <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="js/popper.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/ValidacionesRegistrojs.js"></script>
        <?php
        ?>
    </body>
</html>



