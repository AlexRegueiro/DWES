<?php
   $db = mysqli_connect('localhost', 'root', '1234', 'mysitedb') or die ('Fail');
?>
<html>
   <body>
	<?php
	   session_start();
	   //Aqui creamos el funcionamiento por donde el comentario enviado por la persona queda registrado en la base de datos  y se muestra el nuevo comentario de último
	   $libro_id = $_POST['libro_id'];
	   $comentario = $_POST['new_comment'];
	   $consulta = $db->prepare("INSERT INTO tComentarios(comentario, usuario_id, libro_id, fecha) VALUES (?,?,?,?)");
	   $fecha=date('Y-m-d');
	   if($_SESSION['user_id']!=null){
		$consulta->bind_param("siis",$comentario,$_SESSION['user_id'],$libro_id,$fecha);
	   }else{
		$consulta->bind_param("siis",$comentario,null,$libro_id,$fecha);
	   }
	   $consulta->execute();
	   $consulta->close();

	   echo "<p>Nuevo comentario ";
	   echo mysqli_insert_id($db);
	   echo " añadido</p>";

	   echo "<a href='/detail.php?libro_id=".$libro_id."'>Volver</a>";
	   mysqli_close($db);
	?>
   </body>
</html>
