<?php

Class Talle {

  //Atributos
  Private $id;
  Private $talle;



    //Funcion constructora
    public function __construct($id,$talle){
      $this->id = $id;
      $this->talle = $talle;
    }


    //Métodos de la clase

    public function setId($id){
      $this->id = $id;
    }
    public function getId(){
      return $this->id;
    }


    public function setTalle($talle){
      $this->talle = $talle;
    }
    public function getTalle(){
      return $this->talle;
    }
