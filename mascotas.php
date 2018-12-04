<div class="contenedor" style="background: rgba(0,0,0,.9); border-radius: 50px; padding:25px; display:flex; flex-direction: row; justify-content: center; align-items: center;">

<div class="tabla-contenedor">
    
    <form action="Clientes.php" method="post">    
    <button style="background-color: ffffff; 
                border-color: transparent" class="btn btn-outline-danger" >clientes</button>
   </form>
    
    <form action="registroAnimales.php" method="post">               
        <button style="background-color: ffffff; 
                border-color: transparent" class="btn btn-outline-primary" >registroMascotas</button>
    </form>
    


<table class="table" style="color: white">
  <thead class="thead-dark">
    <tr>
      <th scope="col">CHIP</th>
      <th scope="col">Nombre</th>
      <th scope="col">Sexo</th>
      <th scope="col">Raza</th>
      <th scope="col">Especie</th>
      <th scope="col">F.Nacimiento</th>
    </tr>
  </thead>
  <tbody>

  <?php
 require_once('./funciones.php');
$sql="SELECT * from mascotas";
$result = mysqli_query(conectaBBDD(), $sql); 
while($mostrar =mysqli_fetch_array($result))
  {
    echo "<tr><td width=\"25%\"><font face=\"verdana\">" . 
	$mostrar["id"] . "</font></td>";
    echo "<td width=\"25%\"><font face=\"verdana\">" . 
	$mostrar["nombre"] . "</font></td>";
    echo "<td width=\"25%\"><font face=\"verdana\">" . 
        $mostrar["sexo"] . "</font></td>";
    echo "<td width=\"25%\"><font face=\"verdana\">" . 
        $mostrar["especie"]. "</font></td>";  
    echo "<td width=\"25%\"><font face=\"verdana\">" . 
        $mostrar["raza"]. "</font></td>";
     echo "<td width=\"25%\"><font face=\"verdana\">" . 
        $mostrar["fecha_n"]. "</font></td></tr>"; 
  }


?>
  </tbody>
</table>

</div>


</div>

