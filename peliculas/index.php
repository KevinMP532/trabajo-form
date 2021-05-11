<?php

include("BD.php");
include("pelicula.php");

$peli = new pelicula();
$con = new BD();
$conn = $con->conn;

$peli->crearDatos($conn, 9,'"juan"', '"karlos"', 1);
if (is_bool($peli->obtenerDatos($conn, 7))) {
    echo "no ando";
} else {
    $line = ($peli->obtenerDatos($conn, 7));
    echo "\t\n";
    echo "\t\t\n";
    echo "id: " . $line["idPelicula"];
    echo "\n";
    echo "nombre: " . $line["nombre"];
    echo "\t\n";
    echo "img: " . $line["img"];
    echo "\n";
    echo "estado: " . $line["activo"];
    echo "\t\n";
}

?>