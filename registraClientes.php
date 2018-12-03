
            <div class ="row">
                <h3 style=" white-space: nowrap;" >Elige un nombre de usuario y una contraseña para registrarte</h3>
                <div class="col-4">
                </div>
                <div class="col-4">
                    <br/>
                    
                    <br/>
                        <input id ="cajaDni" class="form-control" type="text" placeholder="DNI" required="required">
                        <br/>
                         <input id ="cajaNombre" class="form-control" type="text" placeholder="Nombre" required="required">
                        <br/>
                         <input id ="cajaApellido" class="form-control" type="text" placeholder="APELLIDO" required="required">
                        <br/>
                         <input id ="cajaTelefono" class="form-control" type="text" placeholder="TELÉFONO" required="required">
                        <br/>
                         
                        <button id="registra" class="btn btn-success btn-block" type="submit">REGISTRA!</button>                        
                        <br/>
                        <button id="volver" class="btn btn-warning btn-block" type="submit">Cancelar</button>
                        <br/>
                        
                </div>
                <div class="col-4">
                </div>
            </div>
  
    <script> 
        $('#registra').click(function(){
            //leo el contenido de las cajas de nombre y contraseña
            var _cajaDni = $('#cajaDni').val();    
            var _cajaNombre = $('#cajaNombre').val();
            var _cajaApellido = $('#cajaApellido').val();
            var _cajaTelefono = $('#cajaTelefono').val();
            
            if ( _cajaDni = null)
            {
                alert('no ha rellenado el dni');
            }
             if ( _cajaNombre = null)
            {
                alert('no ha rellenado el nombre');
            }
             if ( _cajaApellido = null)
            {
                alert('no ha rellenado el Apellido');
            }
             if ( _cajaTelefono = null)
            {
                alert('no ha rellenado el telefono');
            }
            else{
                $('#principal').load("registraFunciones.php",{
                    cajaDni : _cajaDni,
                    cajaNombre : _cajaNombre,
                    cajaApellido : _cajaApellido,
                    cajaTelefono : _cajaTelefono
                   
                });
            }
        });
    </script> 

