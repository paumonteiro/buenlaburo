<?php
namespace Usuario;

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
    public function __construct($id,$firstname,$lastname,$nombre,$email,$password,$genero,$avatar){
      $this->id = $id;
      $this->firstname = $firstname;
      $this->lastname = $lastname;
      $this->nombre = $nombre;
      $this->email = $email;
      $this->setPassword($password);
      $this->genero = $genero;
      $this->avatar = $avatar;
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
      $this->password = password_hash($password, PASSWORD_BCRYPT);
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


    public function setAvatar($avatar){
      $this->avatar = $avatar;
    }
    public function getAvatar(){
      return $this->avatar;
    }




  }
