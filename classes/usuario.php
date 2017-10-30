<?php

Class Usuario {

    //Atributos
    Private $id;
    Private $firstname;
    Private $lastname;
    Private $nombre;
    Private $email;
    Private $password;
    Private $genero;
    Private $avatar;


    //Funcion constructora
    public function __construct($datos) {
      if (isset($datos["id"])) {
        $this->id = $datos["id"];
        $this->password = $datos["password"];
      }
      else {
        $this->password = password_hash($datos["password"], PASSWORD_DEFAULT);
      }
      $this->firstname = $datos["firstname"];
      $this->lastname = $datos["lastname"];
      $this->nombre = $datos["nombre"];
      $this->email = $datos["email"];
      $this->genero = $datos["genero"];
      $this->avatar = $datos["avatar"];
    }



    //Métodos de la clase

    public function setId($id){
      $this->id = $id;
    }
    public function getId(){
      return $this->id;
    }


    public function setFirstname($firstname){
      $this->firstname = $firstname;
    }
    public function getFirstname(){
      return $this->firstname;
    }


    public function setLastname($lastname){
      $this->lastname = $lastname;
    }
    public function getLastname(){
      return $this->lastname;
    }


    public function setNombre($nombre){
      $this->nombre = $nombre;
    }
    public function getNombre(){
      return $this->nombre;
    }


    public function setEmail($email){
      $this->email = $email;
    }
    public function getEmail(){
      return $this->email;
    }


    public function setPassword($password){
      $this->password = $password;
    }
    public function getPassword(){
      return $this->password;
    }


    public function setGenero($genero){
      $this->genero = $genero;
    }
    public function getGenero(){
      return $this->genero;
    }


    public function guardarImagen() {
      $nombre=$_FILES["avatar"]["name"];
      $archivo=$_FILES["avatar"]["tmp_name"];

      $ext = pathinfo($nombre, PATHINFO_EXTENSION);

      $miArchivo = "img/" . $this->getEmail() . "." . $ext;

      move_uploaded_file($archivo, $miArchivo);
    }


  }
