<?php

 class Cachorro{
   
   private $cor;
   private $porte;
   
   public function __construct($cor,$porte){
     $this->porte = $porte;
     $this->cor = $cor;
     echo("Dog nasceu\n");
   }
   
   public function __destruct(){
     echo("Dog morreu\n");
   }
   
   
   public function latir(){
     $cont = func_num_args();
     if ($cont == 1)
     echo("comeu a comida\n");
     else 
     echo("au au\n");
   }
   
   public function getCor(){
    return $cor;
   }
   
   public function setCor($cor){
     $this->cor = $cor;
   }
   
   public function getPorte(){
     return $porte;
   }
   
   public function setPorte($porte){
     $this->porte = $porte;
   }
   
   
 }


?>