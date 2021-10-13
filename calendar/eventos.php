<?php
header('Content-Type: application/json');
$pdo=new PDO ("mysql:dbname=fmm;host=127.0.0.1","root","");

$sentenciasSQL = $pdo->prepare("select A.ID_FMM, 
concat(B.Nombre,' ', B.Apellido_Paterno,' ',B.Apellido_Materno) Paciente,
D.Hospital,
E.Tratamiento,
A.Fecha_Cita start, 
A.Fecha_Cita end,
A.Observaciones_Cita,
F.Status_Cita 
from cita A
INNER JOIN datos_paciente B
ON B.ID_FMM = A.ID_FMM 
INNER JOIN hospital_fs C
ON C.ID_Hospital_FS = A.ID_Hospital_FS 
INNER JOIN hospital D
ON D.ID_Hospital = C.ID_Hospital
INNER JOIN motivo_cita E 
ON E.ID_Tratamiento = A.ID_Tratamiento 
INNER JOIN status_cita F 
ON F.ID_Status_Cita = A.ID_Status_Cita 
");
$sentenciasSQL->execute();

$resultado=$sentenciasSQL->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($resultado);

?>