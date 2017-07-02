<?php

/*  class conexion {

    private $host;
    private $usua;
    private $clav;
    private $base;
    //contructor
    public function _constructor (){
      $this->host = "localhost";
      $this->usua = "root";
      $this->clav = "";
      $this->base = "sistema";
    }
    // conexion a la base de datos
    public function _conectar() {
      $this->conexion = new msql_connect($this->host,$this->usua,$this->clav,$this->base);
      if (!$this->conexion==$this->conexion) {
      echo "Imposible conexion ";
      }
    }
  }*/
  $conexion = mysql_connect('localhost','root','');
  mysql_select_db('sistema') or die('Error al conectarse a la BD');
?>

