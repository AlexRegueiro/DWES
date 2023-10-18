<?php
   $db = mysqli_connect('127.0.0.1', 'root', '1234', 'mysitedb');
?>
<html>
   <body>
      <h1>Conexión establecida</h1>
	<table>
	<tr>
	<th>ID</th>
	<th>Nombre</th>
	<th>Imagen</th>
	<th>Coste</th>
	<th>Autor</th>
	</tr>
      <?php
	// Lanzar una query
	$query = 'SELECT * FROM tLibros';
	$result = mysqli_query($db, $query) or die('Query error');
	// recorrer el resultado
	while ($row = mysqli_fetch_array($result)){
	   echo'<tr>';
	   echo '<td>'.$row[0].'</td>';
	   echo'<td><a href = "/detail.php?libro_id='.$row[0].'">'.$row[1].'</a></td>';
	   $url = $row[2];
	   echo '<td><img width="300px" height="250" src="'.$url.'"></td>';
	   echo '<td>'.$row[3].'</td>';
	   echo '<td>'.$row[4].'</td>';
	   echo '</tr>';
	}
	mysqli_close($db);
      ?>
	</table>
   </body>
</html>
