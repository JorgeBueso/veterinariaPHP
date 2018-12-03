<!DOCTYPE html>

<html>
    <head>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=yes">
        <title>veterinariaPHP</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/fontawesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/regular.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/solid.min.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
       
    
    </head>
    
    <body>
            
        <div class="container" id ="principal">
           
           <!--parte arriba-->
           
           <div class="row">
                
                 <!--columna izquierda-->
                <div class="col-4">
                    <img src="tornillo.jpg" >
                 </div>   
                <!--columna central-->                
                <div class="col-12 align-content-center" style="color: black ; background-color: khaki " >      
                    <h2 class="text-center"> INGRESE SU USUARIO Y SU CONTRASEÑA</h2> 
                   </div>  
                    
                  
                 
                <!--columna derecha-->
                <div class="col-4">
                      
                </div>               
                        
            </div>
           

  
     
     
             <!--parte medio-->
           <div class="row justify-content-center" >
                
               
                 <!--caja del login-->
                 
                                 
                    <div class="col-6 " id="login" style="background: #138496">
                        <br><br>

                            <input id="cajaNombre" class="form-control" type="text" placeholder="USUARIO" required="required">
                            <br>
                            <input id="cajaPassword" class="form-control" type="password" placeholder="CONTRASEÑA">
                            <br>
                            <br>                            
                            <button  id="botonMascotas" class="btn btn-primary btn-block" type="submit">ENTRAR</button>
                            
                            <button  id="botonRegistroMascotas" class="btn btn-primary btn-block" type="submit">REGISTRA MASCOTAS</button>
                            <br>
                            <button  id="botonRegistroUsuarios" class="btn btn-primary btn-block" type="submit">REGISTRA CLIENTES</button>
                            <br>
                    </div>
                    
                 
                   
                                
               
            </div>
             
  
            
            
        
       
    </body>
    <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
     <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
    
    <script>
         $('#botonMascotas').click(function()
        {
            //leo el contenido de las cajas de nombre y de contraseña
            var _nombre = $('#cajaNombre').val();
            var _password = $('#cajaPassword').val();
           
            $("#principal").load("Clientes.php",
            {
                nami :_nombre,
                password : _password
            });
        });
            
    
    $('#botonRegistroMascotas').click(function()
        {
             $("#principal").load("registroAnimales.php");
     });  
     
     $('#botonRegistroUsuarios').click(function()
        {
             $("#principal").load("registraClientes.php");
     });   
     //
     //CARROUSEL DE FONDO
     //
     
    //empieza por la imagen X
    var numImag = 0;

    var listaimg = ["https://www.notigatos.es/wp-content/uploads/2011/04/sen%CC%83ales_que_indican_que_tu_gato_esta_fracturado.jpg",
                    "https://scontent.fmad3-5.fna.fbcdn.net/v/t1.0-9/10624674_649112241854173_5370264270130217283_n.jpg?_nc_cat=106&_nc_ht=scontent.fmad3-5.fna&oh=f524e3376d0758c17a2f3499df6c479f&oe=5C6F4497",
                    "https://scontent.fmad3-8.fna.fbcdn.net/v/t1.0-9/10609559_649111451854252_8271127577407709263_n.jpg?_nc_cat=108&_nc_ht=scontent.fmad3-8.fna&oh=73f9790995a18d6b81b1d422a82d6d61&oe=5C86B197", 
                    "https://instagram.fmad10-2.fna.fbcdn.net/vp/a4368671390c449e913f9b1f7ec3e9c7/5C76B4B1/t51.2885-15/e35/14733273_1132197543562693_4152098932635205632_n.jpg",
                    "https://instagram.fmad10-2.fna.fbcdn.net/vp/c8e779eb30b3d92241845a698d666bfd/5C83FD3D/t51.2885-15/e35/15034634_220489658362260_7121050038691692544_n.jpg",
                    "http://www.recreoviral.com/wp-content/uploads/2015/09/Chico-viaja-con-su-perrolobo-a-todos-lados.png"];

    $(function()
    {

        setInterval(changeImage, 5000);

    });

    function changeImage() 
    {

       $('body').css("background-image", 'url(' + listaimg[numImag] + ')');

       numImag++;
       
        //si el numero de imagenes es = X 
        if(numImag == 6)
        {
            //a la vuelta empieza por la imagen X 
             numImag = 0;
        }
         

    }
        
    </script>
</html>
