<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <title>BIBLIOTECA WIKIKAMO</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="shortcut icon" href="IMG/Otro.png"/>
        <link rel="stylesheet" href="css/Estilos.css">
       
    </head>
    <body>
        <header> 
            <nav class="navbar navbar-expand-lg navbar-dark fondo-nav justify-content-center fixed-top container-fluid">
                <a class="navbar-brand" href="">
                    <img  class="img-responsive Logo" src="IMG/logo.jpg" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                  <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                      <a class="nav-link" href="#">Inicio<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Libros</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Conoce El Sistema
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="#">Misión</a>
                          <a class="dropdown-item" href="#">Visión</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">¿Quiénes Somos?</a>
                        </div>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link disabled" href="#">Contacto</a>
                    </li>
                  </ul>
                  <form class="form-inline my-2 my-lg-0" action="Registro.php" method="post">
                    <input class="form-control mr-sm-2" type="search" placeholder="Buscar">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Registrarse</button>
                  </form>
                    <form class="form-inline my-2 my-lg-0" action="IniciarSesion.php" method="post">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Iniciar Sesión</button>
                    </form>
                </div>
            </nav> 
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="IMG/B1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="IMG/B2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="IMG/B3.jpg" alt="Third slide">
            </div>
        </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
    </div>
        </header>
        <section>
            <div class="container my-5">
                <div class="row text-justify shadow-sm p-3 mb-5 bg-white rounded cursos">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
			<h1>Biblioteca “WIKIKAMO”</h1>
                         <p>La biblioteca “WIKIKAMO” de la Plaza de Cisneros, tiene su origen
                         a los pocos meses de haber sido fundada la Universidad por el Rector Fundador, el Dr. 
                         MARIO CEBALLOS ARAUJO, con el ánimo de despertar en los estudiantes el deseo de expandir
                         conocimientos y dar una mayor trascendencia a sus investigaciones.En 2007, se inició en firme
                         la formación completa de la biblioteca con la adquisición de los primeros libros y los que iban 
                         donando Otras Bibliotecas y los fundadores de  Universidades. 
                         En 2009 la Biblioteca ya contaba aproximadamente con mil libros.</p>
			<p>El crecimiento no era solo por demanda, si no también una Biblioteca que respondiera
                        a los requerimientos de los estudiantes por lo que se incrementó la compra de textos, enciclopedias
                        y libros específicos que sustentaban los programas académicos existentes hasta el momento.</p>
                        <img src="IMG/S1.png" id="S1">
                    </div>
                </div>
            </div>
           
        </section>
    <footer id="footer-fondo">
        <div class="container-fluid">
            <div class="row text-center footer-info1">
		<div class="col align-self-center">
                    <h4>¡Conectese con nosostros y Siguenos!</h4>
                </div>
            </div>
	</div>
        <div class="container-fluid">
            <div class="row mt-5  text-center footer-info2">
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                    <h2>BIBLIOTECA WIKIKAMO</h2>
                    <label for="">____________________________________________</label>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                    <h4>Redes Sociales</h4>
                    <label for="">____________________________</label>
                    <p><img id="icon-f" src="IMG/IcoF.png" alt=""><i> facebook/BiblioWikikamo </i></p>
                    <p><img id="icon-w" src="IMG/icoC.png" alt=""><i> Bwikikamo@hotmail.com </i></p>
                    <p><img id="icon-I" src="IMG/IcoI.jpg" alt=""><i> @Bibliteca_wikiKamo </i></p>

                </div>
               <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                    <h4>Ubicación</h4>
                 <label for="">_________________________________</label>
                   <p><i>Carrera 53 Nº 47 - 48 Biblioteca WikiKaMo, Plaza de Cisneros | Medellín - Colombia</i></p>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row text-center footer-info3">
                <div class="col align-self-center">
                    <p id="copy-color">© Derechos de autor 2018 Copyright Elaborado por</p>
                </div>
            </div>
        </div>
    </footer>
        
        <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="js/popper.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <?php
        ?>
    </body>
</html>
