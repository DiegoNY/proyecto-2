<?php

class Empresa
{
  public  $nombre;
  public  $ruc ;
  public $direccion;
  public function __construct($nombre,$ruc,$direccion)
  {
    $this.$nombre = $nombre;
    $this.$ruc = $ruc;
    $this.$direccion = $direccion;
  }
}

