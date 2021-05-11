<?php 
    class BD {
        public $host;
        public $user;
        public $pw;
        public $dataBase;
        public $conn;
        
        public function __construct()
        {
            $this->host="localhost";
            $this->user="root";
            $this->pw="";
            $this->dataBase="Peliculas";
            $this->conn=new mysqli($this->host,$this->user,$this->pw,$this->dataBase);
            if ($this->conn->connect_errno)
            {
                echo "fallo la conexion";
            }

        }
    }
    
    $CONNECT=new BD();
?>