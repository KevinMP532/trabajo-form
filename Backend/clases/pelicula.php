<?php 
class pelicula {
    public $nombre;
    public $id;
    public $img;
    public $activo;
    private $conn;

    public function __construct()
    {
        $this->nombre="";
        $this->id="";
        $this->img="";
        $this->activo="";
        
    }
    function conexion()
    {
        $query = "SELECT * FROM usuario WHERE idUsuario = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->id);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row != null) {
            $this->id = $row['idpelicula'];
            $this->nombre = $row['nombre'];
        }
    }

    
    public function __construct($db)
    {
        $this->conn = $db;
    }
    public function obtenerDatos($con, $idpelicula){
        $query = "SELECT * FROM pelicula WHERE idPelicula =". $idpelicula;
        $resultado = mysqli_query($con,$query) or die('Consulta fallida: ' . mysqli_error($con));
        if($resultado) {
            $line = mysqli_fetch_array($resultado);
            return $line;
        } else {
            return false;
        }
    }

    public function crearDatos($con, $idpelicula, $nombre, $img, $activo){
        $sql = "INSERT INTO pelicula VALUES ($idpelicula , $nombre, $img, $activo)";
        echo $sql;
        if(  mysqli_query($con, $sql)){
            echo "ando";
        }else{
                echo mysqli_error($con);
            }
    }
}
 $pelicula = new pelicula()
 ?>