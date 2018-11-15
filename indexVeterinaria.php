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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
       
    
    </head>
    <body >
        
         <style>
            background-image:url("http://i.stack.imgur.com/jGlzr.png");
            background-color: #cccccc;     
        </style>
        
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
        
    var index = 0;

    var listaimg = ["https://www.notigatos.es/wp-content/uploads/2011/04/sen%CC%83ales_que_indican_que_tu_gato_esta_fracturado.jpg",
                    "https://scontent.fmad3-5.fna.fbcdn.net/v/t1.0-9/10624674_649112241854173_5370264270130217283_n.jpg?_nc_cat=106&_nc_ht=scontent.fmad3-5.fna&oh=f524e3376d0758c17a2f3499df6c479f&oe=5C6F4497",
                    "https://scontent.fmad3-8.fna.fbcdn.net/v/t1.0-9/10609559_649111451854252_8271127577407709263_n.jpg?_nc_cat=108&_nc_ht=scontent.fmad3-8.fna&oh=73f9790995a18d6b81b1d422a82d6d61&oe=5C86B197", 
                    ""];

    $(function()
    {

        setInterval(changeImage, 2000);

    });

    function changeImage() 
    {

       $('body').css("background-image", 'url(' + listaimg[index] + ')');

       index++;

        if(index == 4)
          index = 0;

    }
        
    </script>
</html>
