<?php
   $db = mysqli_connect('localhost', 'root', '1234', 'mysitedb') or die ('Fail');
?>
<?php
//Creamos las variables donde guardaremos el email y contraseña mandados por el usuario
   $nombre= $_POST['nombre'];
   $apellidos= $_POST['apellidos'];
   $email = $_POST['email'];
   $contraseña = $_POST['contraseña'];
   $contraseñarepe = $_POST['contraseñarepe'];
   $sw=0;
//Instanciamos la direccion de la tabla de la base de datos en la que vamos a trabajar
   $query = 'SELECT email FROM tUsuarios';
//Instanciamos con un comando sql la tabla en una variable y si da error la variable retorna un mensaje de error
   $result = mysqli_query($db, $query) or die('Query error');
//Comprobamos que el email no exista
   while ($row = mysqli_fetch_array($result)){
        if ($row[0]==$email){
            $sw=1;
            break;
        }
   }
//Si el email existe o hay campos vacios o las contraseñas no coinciden va a mostrar un mensaje de error
   if($sw==1 || $email==null || $contraseña==null || $contraseñarepe==null || $nombre==null || $apellidos==null){
    die('<h1>Error</h1>');
   }
   if($contraseña!=$contraseñarepe){
    die('<h1>Error</h1>');
   }
   $contraseña=password_hash($contraseña, PASSWORD_DEFAULT);
//Insetamos los datos en la base de datos
   $consulta = $db->prepare("INSERT INTO tUsuarios(nombre, apellidos, email, contraseña) VALUES (?,?,?,?)");
   $consulta->bind_param("ssss",$nombre,$apellidos,$email,$contraseña);
   $consulta->execute();
   $consulta->close();
   mysqli_close($db);
   echo'<h1>Registro Completado</h1>';
?>
