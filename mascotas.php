
<div class="container" id ="principal">
    <div>
        
         <button  id="botonVueltaIndex" class="btn btn-primary btn-block" type="submit">aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</button>
         
         <php>
             
             
             
         </php>
    </div>
    
</div>
<script>
    
    $('#botonVueltaIndex').click(function()
        {
             $("#principal").load("indexVeterinaria.php");
        });
        
     //
     //CARROUSEL DE FONDO
     //
     
    //empieza por la imagen X
    var numImag = 0;

    var listaimg = ["https://www.notigatos.es/wp-content/uploads/2011/04/sen%CC%83ales_que_indican_que_tu_gato_esta_fracturado.jpg",
                    "https://scontent.fmad3-5.fna.fbcdn.net/v/t1.0-9/10624674_649112241854173_5370264270130217283_n.jpg?_nc_cat=106&_nc_ht=scontent.fmad3-5.fna&oh=f524e3376d0758c17a2f3499df6c479f&oe=5C6F4497",
                    "https://scontent.fmad3-8.fna.fbcdn.net/v/t1.0-9/10609559_649111451854252_8271127577407709263_n.jpg?_nc_cat=108&_nc_ht=scontent.fmad3-8.fna&oh=73f9790995a18d6b81b1d422a82d6d61&oe=5C86B197", 
                    "http://www.recreoviral.com/wp-content/uploads/2015/09/Chico-viaja-con-su-perrolobo-a-todos-lados.png",
                    "https://instagram.fmad10-2.fna.fbcdn.net/vp/a4368671390c449e913f9b1f7ec3e9c7/5C76B4B1/t51.2885-15/e35/14733273_1132197543562693_4152098932635205632_n.jpg",
                    "https://instagram.fmad10-2.fna.fbcdn.net/vp/c8e779eb30b3d92241845a698d666bfd/5C83FD3D/t51.2885-15/e35/15034634_220489658362260_7121050038691692544_n.jpg"];

    $(function()
    {

        setInterval(changeImage, 10000);

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


<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

