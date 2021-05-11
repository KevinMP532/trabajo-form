<?php 
class pelicula {
    public $nombre;
    public $id;
    public $img;
    public $activo;

    public function __construct()
    {
        $this->nombre="";
        $this->id="";
        $this->img="";
        $this->activo="";
        
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