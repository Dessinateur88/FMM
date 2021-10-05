<?php 
 /*require 'conexion.php';*/
 include('conexion.php');
 
session_start();
 if($_POST){

     $usuario = $_POST['usuario'];
     $password = $_POST['password'];
     

     $sql = "SELECT ID_Usuario, Password, Nombre, Apellido_Paterno FROM usuario WHERE ID_Usuario='$usuario'";
     /*echo $sql;*/
     $resultado = $mysqli -> query ($sql);
     $num = $resultado -> num_rows;

     if ($num>0){
         $row = $resultado -> fetch_assoc();
         $password_bd = $row['Password'];
        $pass_c=sha1($password);

        if ( $password_bd == $pass_c)
            {   
                $_SESSION['nombre']=$row['Nombre'];
                $_SESSION['apellido_paterno']=$row['Apellido_Paterno'];
                $_SESSION['id_usuario']=$row['ID_Usuario'];

                header("Location: inicio.php");

            }     
            else{
                echo "La contraseña es incorrecta"; 
                

            }

    } else {
         echo "No existe usuario";
     }
 }
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Fundación Michou y Mau - Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg fmm-card">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Acceso1</h1>
                                    </div>
                                    <form class="user" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                                        <div class="form-group">
                                            <input name="usuario" type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Ingresa tu usuario">
                                        </div>
                                        <div class="form-group">
                                            <input name = "password" type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Contraseña">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Recordar</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Acceder
                                        </button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Olvidaste tu contraseña</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="register.html">Nuevo Usuario</a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                
                </div>
                
                <div class="text-center sidebar-brand-text fmm-black fmm-text-small">Sistema Modular de Seguimiento a Pacientes - Fundación Michou y Mau - Copyright &copy; 2021 </div>
            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Error Modal-->
    <div class="modal fade" id="errormodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">¿Estas Seguro?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Selecciona "Salir" para cerrar la sesión actual. Seras redirigido</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Salir</a>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
