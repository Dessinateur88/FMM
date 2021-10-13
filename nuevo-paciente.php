<?php

session_start();

if (!isset($_SESSION['nombre'])){

    header("Location: index.php");
}

$nombre = $_SESSION ['nombre'];
$apellido_paterno = $_SESSION ['apellido_paterno'];

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

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

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
                        <h1 class="h3 mb-0 text-gray-800">Nuevo Paciente</h1>

                    </div>
                    <div class="row">


                    


                    <div class="row">
					<div class="col-xl-9 mx-auto">
						<h6 class="mb-0 text-uppercase">Text Inputs</h6>
						<hr/>

						<h6 class="mb-0 text-uppercase">Select Inputs</h6>
						<hr/>
						<div class="card">
							<div class="card-body">
								<select class="form-select mb-3" aria-label="Default select example">
									<option selected>Open this select menu</option>
									<option value="1">One</option>
									<option value="2">Two</option>
									<option value="3">Three</option>
								</select>
								<select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
									<option selected>Open this select menu</option>
									<option value="1">One</option>
									<option value="2">Two</option>
									<option value="3">Three</option>
								</select>
								<select class="form-select form-select-sm mb-3" aria-label=".form-select-sm example">
									<option selected>Open this select menu</option>
									<option value="1">One</option>
									<option value="2">Two</option>
									<option value="3">Three</option>
								</select>
								<select class="form-select" aria-label="Disabled select example" disabled>
									<option selected>Open this select menu</option>
									<option value="1">One</option>
									<option value="2">Two</option>
									<option value="3">Three</option>
								</select>
							</div>
						</div>
						<h6 class="mb-0 text-uppercase">File input</h6>
						<hr/>
						<div class="card">
							<div class="card-body">
								<div class="mb-3">
									<label for="formFile" class="form-label">Default file input example</label>
									<input class="form-control" type="file" id="formFile">
								</div>
								<div class="mb-3">
									<label for="formFileMultiple" class="form-label">Multiple files input example</label>
									<input class="form-control" type="file" id="formFileMultiple" multiple>
								</div>
								<div class="mb-3">
									<label for="formFileDisabled" class="form-label">Disabled file input example</label>
									<input class="form-control" type="file" id="formFileDisabled" disabled>
								</div>
								<div class="mb-3">
									<label for="formFileSm" class="form-label">Small file input example</label>
									<input class="form-control form-control-sm" id="formFileSm" type="file">
								</div>
								<div>
									<label for="formFileLg" class="form-label">Large file input example</label>
									<input class="form-control form-control-lg" id="formFileLg" type="file">
								</div>
							</div>
						</div>
						<h6 class="mb-0 text-uppercase">Datalists</h6>
						<hr/>
						<div class="card">
							<div class="card-body">
								<label for="exampleDataList" class="form-label">Datalist example</label>
								<input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
								<datalist id="datalistOptions">
									<option value="San Francisco">
										<option value="New York">
											<option value="Seattle">
												<option value="Los Angeles">
													<option value="Chicago">
								</datalist>
							</div>
						</div>
						<h6 class="mb-0 text-uppercase">Checkboxes and radios</h6>
						<hr/>
						<div class="card">
							<div class="card-body">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
									<label class="form-check-label" for="flexCheckDefault">Default checkbox</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
									<label class="form-check-label" for="flexCheckChecked">Checked checkbox</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
									<label class="form-check-label" for="flexCheckIndeterminate">Indeterminate checkbox</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled" disabled>
									<label class="form-check-label" for="flexCheckDisabled">Disabled checkbox</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedDisabled" checked disabled>
									<label class="form-check-label" for="flexCheckCheckedDisabled">Disabled checked checkbox</label>
								</div>
								<hr/>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
									<label class="form-check-label" for="flexRadioDefault1">Default radio</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
									<label class="form-check-label" for="flexRadioDefault2">Default checked radio</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="flexRadioDisabled" id="flexRadioDisabled" disabled>
									<label class="form-check-label" for="flexRadioDisabled">Disabled radio</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="flexRadioDisabled" id="flexRadioCheckedDisabled" checked disabled>
									<label class="form-check-label" for="flexRadioCheckedDisabled">Disabled checked radio</label>
								</div>
								<hr/>
								<div class="form-check form-switch">
									<input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
									<label class="form-check-label" for="flexSwitchCheckDefault">Default switch checkbox input</label>
								</div>
								<div class="form-check form-switch">
									<input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
									<label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label>
								</div>
								<div class="form-check-danger form-check form-switch">
									<input class="form-check-input" type="checkbox" id="flexSwitchCheckCheckedDanger" checked>
									<label class="form-check-label" for="flexSwitchCheckCheckedDanger">Checked switch checkbox input</label>
								</div>
								<div class="form-check form-switch">
									<input class="form-check-input" type="checkbox" id="flexSwitchCheckDisabled" disabled>
									<label class="form-check-label" for="flexSwitchCheckDisabled">Disabled switch checkbox input</label>
								</div>
								<div class="form-check form-switch">
									<input class="form-check-input" type="checkbox" id="flexSwitchCheckCheckedDisabled" checked disabled>
									<label class="form-check-label" for="flexSwitchCheckCheckedDisabled">Disabled checked switch checkbox input</label>
								</div>
								<hr/>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
									<label class="form-check-label" for="inlineCheckbox1">1</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
									<label class="form-check-label" for="inlineCheckbox2">2</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" disabled>
									<label class="form-check-label" for="inlineCheckbox3">3 (disabled)</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
									<label class="form-check-label" for="inlineRadio1">1</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
									<label class="form-check-label" for="inlineRadio2">2</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" disabled>
									<label class="form-check-label" for="inlineRadio3">3 (disabled)</label>
								</div>
							</div>
						</div>
						<h6 class="mb-0 text-uppercase">Input Mask</h6>
						<hr/>
						<div class="card">
							<div class="card-body">
								<form>
									<div class="mb-3">
										<label class="form-label">Date:</label>
										<input type="date" class="form-control">
									</div>
									<div class="mb-3">
										<label class="form-label">Date time:</label>
										<input type="datetime-local" class="form-control">
									</div>
									<div class="mb-3">
										<label class="form-label">Email:</label>
										<input type="email" class="form-control" placeholder="example@gmail.com">
									</div>
									<div class="mb-3">
										<label class="form-label">Password:</label>
										<input type="password" class="form-control" value="........">
									</div>
									<div class="mb-3">
										<label class="form-label">Input File:</label>
										<input type="file" class="form-control">
									</div>
									<div class="mb-3">
										<label class="form-label">Month:</label>
										<input type="month" class="form-control">
									</div>
									<div class="mb-3">
										<label class="form-label">Search:</label>
										<input type="search" class="form-control">
									</div>
									<div class="mb-3">
										<label class="form-label">Tel:</label>
										<input type="tel" class="form-control">
									</div>
									<div class="mb-3">
										<label class="form-label">Time:</label>
										<input type="time" class="form-control">
									</div>
									<div class="mb-3">
										<label class="form-label">Url:</label>
										<input type="url" class="form-control" placeholder="https://example.com/users/">
									</div>
									<div class="mb-3">
										<label class="form-label">Week:</label>
										<input type="week" class="form-control">
									</div>
								</form>
							</div>
						</div>
						<h6 class="mb-0 text-uppercase">Input Tags</h6>
						<hr/>
						<div class="card">
							<div class="card-body">
								<form>
									<div class="mb-3">
										<label class="form-label">Basic</label>
										<input type="text" class="form-control" data-role="tagsinput" value="jQuery,Script,Net">
									</div>
									<div class="mb-3">
										<label class="form-label">Multi Select</label>
										<select multiple data-role="tagsinput">
											<option value="Amsterdam">Amsterdam</option>
											<option value="Washington">Washington</option>
											<option value="Sydney">Sydney</option>
											<option value="Beijing">Beijing</option>
											<option value="Cairo">Cairo</option>
										</select>
									</div>
								</form>
							</div>
						</div>
						<h6 class="mb-0 text-uppercase">Range Inputs</h6>
						<hr/>
						<div class="card">
							<div class="card-body">
								<div class="mb-3">
									<label for="customRange1" class="form-label">Example range</label>
									<input type="range" class="form-range" id="customRange1">
								</div>
								<div class="mb-3">
									<label for="disabledRange" class="form-label">Disabled range</label>
									<input type="range" class="form-range" id="disabledRange" disabled>
								</div>
								<div class="mb-3">
									<label for="customRange2" class="form-label">Example range</label>
									<input type="range" class="form-range" min="0" max="5" id="customRange2">
								</div>
							</div>
						</div>
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
                        <span>Copyright &copy; FMM 2021</span>
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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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

</body>

</html>