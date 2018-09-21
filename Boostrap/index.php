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
        <title></title>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/EstilosIndex.css"/>
        
        
    </head>
    <body>
        <header>
            <!-- Image and text -->
            <nav  class="navbar navbar-light ">
              <a class="navbar-brand" href="#">
                  <img src="IMG/Logo.jpg" width="40" height="40" class="d-inline-block align-top" alt="">
                Bootstrap
              </a>
            </nav>
        </header>
        <section>
            <div class="container ">
                <div class="registro">
                    <img class="img-responsive" src="IMG/Usua.jpg" alt="">
                </div>
                    <form>
                       <div class="form-row">
                         <div class="form-group col-md-6">
                           <label for="Nombre">Nombre </label>
                           <input type="text" class="form-control" id="Nombre" placeholder="Ingrese Nombre" name="Nombre">
                         </div>
                         <div class="form-group col-md-6">
                            <label for="Apellido">Apellido</label>
                            <input type="text" class="form-control" id="Apellido" placeholder="Ingrese Apellido" name="Apellido">
                         </div>
                       </div>
                       <div class="form-row">
                         <div class="form-group col-md-6">
                           <label for="Pais">Pais</label>
                           <select class="form-control" id="Pais" name="Pais">
                               <option value="Colombia" >Colombia</option>
                               <option value="Venezuela">Venezuela</option>
                               <option value="Ecuador">Ecuador</option>
                               <option value="EE.UU">EE.UU</option>
                               <option value="Suiza">Suiza</option>
                          </select>
                         </div>
                         <div class="form-group col-md-4">
                          <label for="Departamento">Departamento</label>
                          <select class="form-control" id="Departamento" name="Departamento">
                              <option value="Ant">Antioqia</option>
                              <option value="Atlantico">Atlantico</option>
                              <option value="Cundinamarca">Cundinamarca</option>
                              <option value="Arauca">Arauca</option>
                              <option value="Magdalena">Magdalena</option>
                         </select>
                         </div>
                         <div class="form-group col-md-2">
                           <label for="Ciudad">Ciudad</label>
                           <select class="form-control" id="Ciudad" name="">
                               <option value=" Medellin">Medellin</option>
                               <option value=" Bucaramanga">Bucaramanga</option>
                               <option value="Barranquilla">Barranquilla</option>
                               <option value="Manizales">Manizales</option>
                               <option value="Bogota">Bogota</option>
                           </select>
                         </div>
                       </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                   <label for="Telefono">Telefono </label>
                                   <input type="text" class="form-control" id="Telefono" placeholder="Ingrese Telefono" name="Telefono">
                               </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="Email">Email </label>
                                    <input type="email" class="form-control" id="Email" placeholder="Ingrese Email" name="Email">
                                </div>
                            </div>
                        </div>
                       <div class="form-group">
                         <div class="form-check">
                           <input class="form-check-input" type="checkbox" id="Terminoscondiciones">
                           <label class="form-check-label" for="gridCheck">
                             Terminos y Condiciones
                           </label>
                         </div>
                       </div>
                       <button type="submit" class="btn btn-primary btn-enviar">Completar Registro</button>
                     </form>
            </div>
        </section>
        <footer>
            <div  class="container-fluid  navbar style-footer">
                <h2> &COPY Derechos Reservados</h2>
            </div>
        </footer>
        <?php
        // put your code here
        ?>
        <script src="js/jquery-3.3.1.min.js"> </script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        
    </body>
</html>
