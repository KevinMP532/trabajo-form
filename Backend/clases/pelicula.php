<?php
class pelicula
{
    public $nombre;
    public $idPelicula;
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

    function crearDatos()
    {
        $sql = "INSERT INTO pelicula SET idPelicula = :idpelicula, nombre = :Nombre, img = :Img, activo = :Activo";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':idpelicula', $this->idPelicula);
        $stmt->bindParam(':Nombre', $this->nombre);
        $stmt->bindParam(':Img', $this->img);
        $stmt->bindParam(':Activo', $this->activo);
        $stmt->execute();
        return "algo";
    }
}

