<div class="contenedor" style="background: rgba(0,0,0,.9); border-radius: 50px; padding:25px; display:flex; flex-direction: row; justify-content: center; align-items: center;">
  
    
<div class="tabla-contenedor">
    
    <form action="mascotas.php" method="post">    
        <button style="background-color: #ffffff; 
                border-color: transparent" class="btn btn-outline-danger" >MASCOTAS</button>
   
     </form>
         <form action="registraClientes.php" method="post">               
            <button style="background-color: #ffffff; 
                border-color: transparent" class="btn btn-outline-primary" >REGISTROCLIENTES</button>
          </form>
    
   


<table class="table" style="color: white">
  <thead class="thead-dark">
    <tr>
      <th scope="col">DNI</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Telefono</th>
    </tr>
  </thead>
  <tbody>

  <?php
 require_once('./funciones.php');
$sql="SELECT * from Clientes";
$result = mysqli_query(conectaBBDD(), $sql); 
while($mostrar =mysqli_fetch_array($result))
  {
    echo "<tr><td width=\"25%\"><font face=\"verdana\">" . 
	    $mostrar["dni"] . "</font></td>";
    echo "<td width=\"25%\"><font face=\"verdana\">" . 
	    $mostrar["nombre"] . "</font></td>";
    echo "<td width=\"25%\"><font face=\"verdana\">" . 
	    $mostrar["apellidos"] . "</font></td>";
    echo "<td width=\"25%\"><font face=\"verdana\">" . 
      $mostrar["telefono"]. "</font></td></tr>";    
  }


?>
  </tbody>
</table>

</div>


</div>