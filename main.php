<?php
require_once "dog.php";
require_once "invert.php";

$dog = new Cachorro("preto","medio");

$dog->latir("aaa");

$gato = new Invertido();

$gato->latir();

?>