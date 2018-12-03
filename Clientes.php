<table border="1" cellspacing=1 cellpadding=2 style="font-size: 8pt"><tr>
<td><font face="arial"><b>DNI</b></font></td>
<td><font face="arial"><b>Nombre</b></font></td>
<td><font face="arial"><b>Apellido</b></font></td>
<td><font face="arial"><b>Telefono</b></font></td>
</tr>
 
 <?php
$sql="SELECT * from Clientes";
$result = mysql_query($funciones::conectaBBDD, $query); 
while($mostrar =mysql_fetch_array($result))
  {
 
    echo "<tr><td width=\"25%\"><font face=\"verdana\">" . 
	    $row["DNI"] . "</font></td>";
    echo "<td width=\"25%\"><font face=\"verdana\">" . 
	    $row["Nombre"] . "</font></td>";
    echo "<td width=\"25%\"><font face=\"verdana\">" . 
	    $row["Apellido"] . "</font></td>";
    echo "<td width=\"25%\"><font face=\"verdana\">" . 
	    $row["Telefono"]. "</font></td></tr>";    
    $numero++;
    
  }


?>
</table>
