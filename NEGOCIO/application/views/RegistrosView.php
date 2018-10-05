
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
 


