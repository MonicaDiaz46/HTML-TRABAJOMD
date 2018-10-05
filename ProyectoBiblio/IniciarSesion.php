<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <title>Inicio de Sesion</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="shortcut icon" href="IMG/LogoRe.gif"/>
        <link rel="stylesheet" href="css/Estilos.css">
    </head>
    <body>
    <hearder>
        <nav class="navbar navbar-light Barra-nav">
            <a class="navbar-brand" href="index.php"> 
                <img  src="IMG/Registros.jpg" class="d-inline-block align-top Logo" alt=""> Biblioteca
            </a>
        </nav>
    </hearder>
    <section>
        <div class="container">
            <form onsubmit="return Validacion();" class="dropdown-menu p-4"
                 class="mt-5 my-5 shadow p-3 mb-5 bg-white rounded" action="validarRegistro.php" method="post">
               <div class="form-group">
                 <label for="documento">Documento</label>
                 <input type="text" class="form-control" id="Documento" placeholder="Documento" name="Documento" required>
               </div>
               <div class="form-group">
                     <label for="nombre">Nombre Completo</label>
                     <input type="text" class="form-control" id="Nombre" placeholder=Nombre name="Nombre">
                 </div>
               </div>
               <div class="form-group">
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="dropdownCheck2">
                      <label class="form-check-label" for="dropdownCheck2">
                        Recordar Siempre
                      </label>
                    </div>
                </div>
               <button type="submit" class=" btn btn-primary btn-Iniciar Sesion">Iniciar Sesion</button>
            </form>
        
    </section>
        <footer>
            
        </footer>
        
        <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="js/popper.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/ValidacionesRegistrojs.js"></script>
    </body>
</html>


                    



