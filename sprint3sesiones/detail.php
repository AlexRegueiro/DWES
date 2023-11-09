<?php
   $db = mysqli_connect('localhost', 'root', '1234', 'mysitedb') or die('Fail'); //Nos conectamos a la base de datos
?>
<html>
   <body>
	<?php
	  //Recibimos el get del id del libro
	  if (!isset($_GET['libro_id'])) {
		//Si no hay muestra un error
		die('No se ha especificado una canción');
	  }
	  $libro_id = $_GET['libro_id']; //guardamos el id en una variable
	  $query = 'SELECT * FROM tLibros WHERE id='.$libro_id; //selecionamos todos los datos que pertenecen a la id de ese libro y los mostramos
	  $result = mysqli_query($db, $query) or die('Query error');
	  $only_row = mysqli_fetch_array($result);
	  echo '<h1>'.$only_row[1].'</h1>';
	  $url = $only_row[2];
	  echo '<h2><img width="300px" height="250px" src="'.$url.'"></h2>';
	  echo '<h2>'.$only_row[3].'</h2>';
	  echo '<h2>'.$only_row[4].'</h2>';

	?>
	
	<h3>Comentarios:</h3>
	<ul>
	   <?php
		$query2 = 'SELECT * FROM tComentarios WHERE libro_id='.$libro_id; //Mostramos toda la información de los comentarios hechos sobre el libro
		$result2 = mysqli_query($db, $query2) or die('Query error');
		while ($row = mysqli_fetch_array($result2)){
		  echo '<li>'.$row['comentario']." ".$row['fecha'].'</li>';
		}
		mysqli_close($db); //cerramos la base de datos
//Creamos un formulario por donde las personas puedan dejar su comentario respecto al libro que quieran

	   ?>
	</ul>
	<p>Deja un nuevo comentario:</p>
	<form action="/comment.php" method="post">
	   <textarea rows="4" cols="50" name="new_comment"></textarea><br>
	   <input type="hidden" name="libro_id" value= "<?php echo $libro_id; ?>">
	   <input type="submit" value="comentar">
	</form>
   </body>
</html>

