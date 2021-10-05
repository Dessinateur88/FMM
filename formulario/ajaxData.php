<?php
//Include database configuration file
include('../conexion.php');

//CP LANZA LAS COLONIAS
if(isset($_POST["cp_id"]) && !empty($_POST["cp_id"])){
    //SELECCIONAR LOS ESTADOS
    $query = $db->query("SELECT * FROM asentamiento WHERE ID_Codigo_Postal = ".$_POST['cp_id ']."  ORDER BY state_name ASC");
    
    //CONTAR EL TOTAL DE FILAS
    $rowCount = $query->num_rows;
    
    //MOSTRAR LA LISTA DE LOS ESTADOS
    if($rowCount > 0){
        echo '<option value="">Select state</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['ID_Municipio'].'">'.$row['Asentamiento'].'</option>';
        }
    }else{
        echo '<option value="">State not available</option>';
    }
}

if(isset($_POST["state_id"]) && !empty($_POST["state_id"])){
    //Get all city data
    $query = $db->query("SELECT * FROM cities WHERE state_id = ".$_POST['state_id']."  ORDER BY city_name ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display cities list
    if($rowCount > 0){
        echo '<option value="">Select city</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['city_id'].'">'.$row['city_name'].'</option>';
        }
    }else{
        echo '<option value="">City not available</option>';
    }
}
?>