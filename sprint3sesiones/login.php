<?php
   $db = mysqli_connect('localhost', 'root', '1234', 'mysitedb') or die ('Fail');
?>
<?php
//Creamos las variables donde guardaremos el email y contraseña mandados por el usuario

   $email = $_POST['email'];
   $contraseña = $_POST['contraseña'];
   $comprobarcontraseña;
   $sw=1;
   //Instanciamos la direccion de la tabla de la base de datos en la que vamos a trabajar
   $query = 'SELECT email,contraseña FROM tUsuarios';
//Instanciamos con un comando sql la tabla en una variable y si da error la variable retorna un mensaje de error
   $result = mysqli_query($db, $query) or die('Query error');
//Comprobamos que el email no exista
   while ($row = mysqli_fetch_array($result)){
        if ($row[0]==$email){
            $sw=0;
            $comprobarcontraseña=$row[1];
            break;
        }
   }
   if(1!=password_verify($contraseña, $comprobarcontraseña)){
    die('<h1>Error</h1>');
   }

   if($sw==1 || $email==null || $contraseña==null){
    die('<h1>Error</h1>');
   }

   header('Location:main.php');
?>