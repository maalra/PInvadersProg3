<?php
class ia
{
//declaracion de una propiedad
public $columna = '1';
public $fila = '3';
//declaracion de metodo
public function getcolumna(){
return $this->columna;
}
public function getfila(){
return $this->fila;
}
//Sett
public function setColumna($col) {
  if ($col>3){
    $this->columna=3;
  }elseif ($col<0){
    $this->columna=0;
  }else {
    $this->columna=$col;
}
}
public function setFila($fil){
  if ($fil>3){
    $this->fil=3;
  }elseif ($fil<0){
    $this->fila=0;
  }else {
    $this->fila=$fil;
  }
}

//randoms
public function randomPos(){
  $this->fila=rand(0,3);
  $this->columna=rand(0,3);
}
}

?>
