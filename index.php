<?php
   require "global/conexion.php";
   session_start();
   if($_POST){ 
       //Recibimos el usuario y password 
       $usuario=$_POST['usuario'];
       $password=$_POST['password'];

       $sql = "SELECT id, password, nombre, tipo_usuario from usuarios where usuario='$usuario'";
       //verificar USUARIO    //Hace consulta
       $resultado=$mysqli->query($sql);
       $num=$resultado->num_rows;
       if($num>0){
           $row=$resultado->fetch_assoc(); //Capturar resultados
           $password_db=$row['password']; //Etraemos la contraseña solamente
           //Comprobar password
           if($password_db==$password){
               //INICIAR SESION
               $_SESSION['id']=$row['id'];
               $_SESSION['nombre']=$row['nombre'];
               $_SESSION['tipo_usuario']=$row['tipo_usuario'];

               header("Location: vistas/principal.php");

           }else{
               echo "CONTRASEÑA INCORRECTA";
           }

       }else{
           echo "NO EXITE USUARIO";
       }

   }

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login - SB Admin</title>
        <link href="./public/css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Bienvenido Sistema de Inventario</h3></div>
                                    <div class="card-body">
                                        <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>"> <!--Esto es para que el formulario se vuelva a cargar-->
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" name="usuario"type="text" placeholder="Usuario" />
                                                <label for="inputEmail">Usuario</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" name="password" type="password" placeholder="Password" />
                                                <label for="inputPassword">Contraseña</label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                                <label class="form-check-label" for="inputRememberPassword">Recordar contraseña</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="./password.html">Olvidaste la contraseña?</a>
                                                <button class="btn btn-primary" type="submit" >Ingresar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
<?php 
require 'vistas/footer.php';
?>
