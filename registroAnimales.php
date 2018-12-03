<div class="row">
                
                 <!--columna izquierda-->
                <div class="col-4" style="">
                    
                 </div>   
            <div class ="row justify-content-center">
                <h2></h2>
                
                <div class="col-10" style="background: #138496">
                    <br/>
                    
                    <br/>
                   
                        <h3>DATOS DE LA MASCOTA</h3>
                        <input id ="cajaNombreMascota" class="form-control" type="text" placeholder="NombreMascota" required="required">
                        <br/>
                        <input id ="cajaRaza" class="form-control" type="password" placeholder="Raza">
                        <br/>
                        <input id ="cajaSexo" class="form-control" type="password" placeholder="Sexo">
                        <br/>    
                        <input id ="cajaChip" class="form-control" type="text" placeholder="Chip" required="required">
                        <br/>
                        <input id ="cajaFecha" class="form-control" type="password" placeholder="FechaNacimiento">
                        <br/>
                        <button id="botonMascotas" class="btn btn-success btn-block" type="submit">REGISTRAR MASCOTA</button>                    
                        <button id="botonVueltaIndex" class="btn btn-outline-light btn-block" type="submit">CANCELAR</button>
                        <br/>
                </div>
                <div class="col-4">
                </div>
            </div>
</div>
    <script> 
        $('#boton1').click(function(){
            //leo el contenido de las cajas de nombre y contraseña
            var _cajaNombre = $('#cajaNombre').val();
            var _cajaPassword = $('#cajaPassword').val();
            var _cajaPassword2 = $('#cajaPassword2').val();
            if (_cajaPassword != _cajaPassword2){
                alert('LAS CONTRASEÑAS NO COINCIDEN');
            }
            else{
                $('#principal').load("registra_2.php",{
                    cajaNombre : _cajaNombre,
                    cajaPassword : _cajaPassword
                });
            }
        });
        
    $('#botonVueltaIndex').click(function()
        {
             $("#principal").load("indexVeterinaria.php");
        });
         $('#botonMascotas').click(function()
        {
             $("#principal").load("mascotas.php");
     });   
    </script> 
