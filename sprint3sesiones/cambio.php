<?php
   $db = mysqli_connect('localhost', 'root', '1234', 'mysitedb') or die ('Fail');
?>
<?php
//Creamos las variables donde guardaremos el email y contraseña mandados por el usuario
   session_start();
   if($_SESSION['user_id']==null){
    die('Usuario no logueado');
   }
   $viejacontraseña = $_POST['antiguacontraseña'];
   $nuevacontraseña = $_POST['nuevacontraseña']; 
   $repetirnuevacontraseña = $_POST['repetirnuevacontraseña'];
   $comprobarcontraseña;
   //sacamos la contraseña actual de la base de datos
   $query = 'SELECT contraseña FROM tUsuarios where id='.$_SESSION['user_id'];

   $result = mysqli_query($db, $query) or die('Query error');

   while ($row = mysqli_fetch_array($result)){
    $comprobarcontraseña=$row[0];
}

   if(1!=password_verify($viejacontraseña, $comprobarcontraseña)){
    die('<h1>Contraseña Incorrecta</h1>');
   }
   if($nuevacontraseña!=$repetirnuevacontraseña){
    die('<h1>Contraseñas nuevas no coinciden</h1>');
   }
   $contraseña=password_hash($nuevacontraseña, PASSWORD_DEFAULT);

   $consulta = $db->prepare("UPDATE tUsuarios set contraseña = (?) Where id=(?)");
   $consulta->bind_param("si",$contraseña,$_SESSION['user_id']);
   $consulta->execute();
   $consulta->close();
   echo('Contraseña cambiada');
   mysqli_close($db);
?>