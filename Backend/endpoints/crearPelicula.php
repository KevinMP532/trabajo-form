<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once '../clases/BD.php';
include_once '../clases/pelicula.php';

$database = new BD();
$db = $database->getConnection();
$pelicula = new pelicula($db);
$data = json_decode(file_get_contents("php://input"));
$pelicula->idpelicula = $data->idpelicula;
$pelicula->login();

if($pelicula->nombre!=null){
    $pelicula_arr = array(
        "idpelicula" => $pelicula->idpelicula,
        "nombre" => $pelicula->nombre
    );
    http_response_code(200);
    echo json_encode($pelicula_arr);
}
else{
    http_response_code(200);
    echo json_encode(array("message" => "pelicula does not exist."));
}


?>
