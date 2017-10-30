<?php

Class Categoria {

  //Atributos
  Private $id;
  Private $categoria;



    //Funcion constructora
    public function __construct($id,$categoria){
      $this->id = $id;
      $this->categoria = $categoria;
    }


    //Métodos de la clase

    public function setId($id){
      $this->id = $id;
    }
    public function getId(){
      return $this->id;
    }


    public function setCategoria($categoria){
      $this->categoria = $categoria;
    }
    public function getCategoria(){
      return $this->categoria;
    }
