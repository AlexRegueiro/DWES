<?php
   $db = mysqli_connect('localhost', 'root', '1234', 'mysitedb') or die ('Fail');
?>
<html>
   <body>
	<?php
	   //Aqui creamos el funcionamiento por donde el comentario enviado por la persona queda registrado en la base de datos  y se muestra el nuevo comentario de último
	   $libro_id = $_POST['libro_id'];
	   $comentario = $_POST['new_comment'];

	   $query = "INSERT INTO tComentarios(comentario, usuario_id, libro_id, fecha) VALUES ('".$comentario."', NULL, ".$libro_id.",now())";

	   mysqli_query($db, $query) or die('Error');

	   echo "<p>Nuevo comentario ";
	   echo mysqli_insert_id($db);
	   echo " añadido</p>";

	   echo "<a href='/detail.php?libro_id=".$libro_id."'>Volver</a>";
	   mysqli_close($db);
	?>
   </body>
</html>
