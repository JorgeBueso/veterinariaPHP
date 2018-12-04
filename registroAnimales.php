<div class="container" id ="principal">
     
     
    <!--parte medio-->
    <div class="row justify-content-center" >
                
               
        <!--caja del login-->
                 
                                 
        <div class="col-1 justify-content-center "  style="background: #138496">
                        
            <form action="registraFuncionesAnimales.php" method="post">
                <h3>DATOS DE LA MASCOTA</h3>
                    <input id ="cajaNombreMascota" name="chip" class="form-control" type="text" placeholder="chip" required="required">
                    <br/>
                    <input id ="cajaNombreMascota" name="nombre" class="form-control" type="text" placeholder="NombreMascota" required="required">
                    <br/>
                    <input id ="cajaRaza" name="raza" class="form-control" type="text" placeholder="Raza">
                    <br/>
                    <input id ="cajaEspecie" name="especie" class="form-control" type="text" placeholder="Especie">
                    <br/>
                    <input id ="cajaSexo" name="sexo" class="form-control" type="text" placeholder="Sexo">
                    <br/>                          
                    <input id ="cajaFecha" name="fecha" class="form-control" type="datetime" placeholder="FechaNacimiento">
                    <br/>                    
                    <button id="botonMascotas" class="btn btn-success btn-block" type="submit">REGISTRAR MASCOTA</button>                    
                    <button id="botonVueltaIndex" class="btn btn-outline-light btn-block" type="reset">CANCELAR</button>
                    <br/>
            </form>
                            
        </div>
                    
                 
                   
                                
               
    </div>
    
</div>