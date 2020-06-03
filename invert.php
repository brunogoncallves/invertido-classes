<?php 

require_once "dog.php";

class Invertido extends Cachorro{
  
  public function __construct(){
    echo("gato nasceu\n");
  }
  
  
  public function latir(){
    echo("miau miau\n");
  }
  
  
  
}


?>