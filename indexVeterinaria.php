<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=yes">
        <title>CÁLLESE_VIEJO_LESBIANO</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/fontawesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/regular.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/solid.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container" id ="principal">
            
           
            <div class="row">
                <div class="col-4">   
                <button  id="botonMascotas" class="btn btn-primary btn-block" type="submit">Primary</button>
                </div>
                <div class="col-1">
                    
                    
                    
                </div>
            </div>
            
            
        </div>
       
    </body>
    <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
     <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
    
    <script>
        $('#botonMascotas').click(function()
        {
             $("#principal").load("mascotas.php");
        });
        
        
    </script>
</html>
