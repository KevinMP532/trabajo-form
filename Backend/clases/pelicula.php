<?php
class pelicula
{
    public $nombre;
    public $id;
    public $img;
    public $activo;
    private $conn;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    function returnMovies()
    {

        $query = "SELECT
                 *
            FROM
                pelicula
           ";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $row = $stmt->fetchAll(PDO::FETCH_CLASS);

        return $row;
    }
}
function crearDatos($con, $idpelicula, $nombre, $img, $activo)
{
    $sql = "INSERT INTO pelicula VALUES ($idpelicula , $nombre, $img, $activo)";
    echo $sql;
    if (mysqli_query($con, $sql)) {
        echo "ando";
    } else {
        echo mysqli_error($con);
    }
}
$pelicula = new pelicula();
