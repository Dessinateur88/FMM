<?php

session_start();

if (!isset($_SESSION['nombre'])) {

    header("Location: index.php");
}

$nombre = $_SESSION['nombre'];
$apellido_paterno = $_SESSION['apellido_paterno'];

?>



<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/logo/favicon.png" type="image/png" />

    <title>Fundación Michou y Mau</title>
    <!-- Bootstrap para el Calendario-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->

        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <?php include 'sidebar.php' ?>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <?php include 'topbar.php' ?>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Programación de Citas</h1>

                    </div>


                    <div class=" row">
                        <div class=" col-lg-5">
                            <div ">
                                
                            </div>
                        </div>

                

                        <div class="card shadow mb-4 col-lg-7">
                            <div class="card-body ">
                                <div id='calendar'></div>
                            </div>
                        </div>
                    </div>




                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Fundación Michou y Mau 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <a class="btn btn-primary" href="logout.php">Salir</a>
                </div>
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

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>




    <!-- Para el Calendario-->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href='calendar/fullcalendar.min.css' rel='stylesheet' />
    <link rel="stylesheet" href='calendar/fullcalendar.print.min.css' rel='stylesheet' media='print' />
    <script src='calendar/moment.min.js'></script>
    <script src='calendar/jquery.min.js'></script>
    <script src='calendar/fullcalendar.min.js'></script>
    <script src='calendar/es.js'></script>



    <script>
        $(document).ready(function() {
            $('#calendar').fullCalendar({
                timeFormat: 'h(:mm)t', // uppercase H for 24-hour clock
                header: {
                    left: 'today,prev,next',
                    center: 'title',
                    right: 'month,basicWeek,basicDay, agendaWeek,agendaDay'
                },

                dayClick: function(date, jsEvent, view) {
                    $('#txtFecha').val(date.format());
                    $("#ModalEditar").modal("show");
                },

                /*defaultDate: '2020-05-12',*/
                editable: true,
                eventLimit: true, // allow "more" link when too many events
                events: 'calendar/eventos.php',

                eventClick: function(calEvent, jsEvent, view) {
                    $('#ID_FMM').html(calEvent.title);
                    $('#Paciente').html(calEvent.Paciente);
                    $('#Hospital').html(calEvent.Hospital);
                    $('#Tratamiento').html(calEvent.Tratamiento);
                    $('#Observaciones_Cita').html(calEvent.Observaciones_Cita);
                    $('#Status_Cita').html(calEvent.Status_Cita);
                    $("#ModalEventos").modal("show");
                }


            });
        });
    </script>

    <!-- Modal -->
    <div class="modal fade" id="ModalEventos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="Paciente"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id='title'></div>
                    <div id='Paciente'></div>
                    <div id='Hospital'></div>
                    <div id='Tratamiento'></div>
                    <div id='Observaciones_Cita'></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success">Agregar</button>
                    <button type="button" class="btn btn-success">Modificar</button>
                    <button type="button" class="btn btn-danger">Borrar</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal AGREGAR MODIFICAR ELIMINAR -->
    <div class="modal fade" id="ModalEditar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="Paciente"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Fecha: <input type="text" id="txtFecha" name="txtFecha" /><br />
                    Titulo: <input type="text" id="txtTitulo"><br />
                    Hora: <input type="text" id="txtHora"><br />
                    Observaciones_Cita: <textarea type="text" id="txtObservaciones_Cita" rows="3"></textarea>><br />
                    Tratamiento: <input type="text" id="txtTratamiento"><br />
                    <div id='Observaciones_Cita'></div>
                </div>
                <div class="modal-footer">
                    <button type="button" id="btnAgregar" class="btn btn-success">Agregar</button>
                    <button type="button" class="btn btn-success">Modificar</button>
                    <button type="button" class="btn btn-danger">Borrar</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>



</body>

</html>