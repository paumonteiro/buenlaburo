<?php

Class Orden_de_compra {

  //Atributos
  Private $id;
  Private $idProducto;
  Private $idUsuario;
  Private $cantidad;
  Private $precio;
  Private $precioTotal;
  Private $idEstado;


  //Funcion constructora
  public function __construct($id,$idProducto,$idUsuario,$cantidad,$precio,$precioTotal,$idEstado){
    $this->id = $id;
    $this->idProducto = $idProducto;
    $this->producto = $producto;
    $this->cantidad = $cantidad;
    $this->precio = $precio;
    $this->precioTotal = $precioTotal;
    $this->idEstado = $idEstado;
  }


  //Métodos de la clase

  public function setId($id){
    $this->id = $id;
  }
  public function getId(){
    return $this->id;
  }


  public function setIdProducto($idProducto){
    $this->idProducto = $idProducto;
  }
  public function getIdProducto(){
    return $this->idProducto;
  }


  public function setidUsuario($idUsuario){
    $this->idUsuario = $idUsuario;
  }
  public function getidUsuario(){
    return $this->idUsuario;
  }


  public function setCantidad($cantidad){
    $this->cantidad = $cantidad;
  }
  public function getCantidad(){
    return $this->cantidad;
  }


  public function setPrecio($precio){
    $this->precio = $precio;
  }
  public function getPrecio(){
    return $this->precio;
  }


  public function setPrecioTotal($precioTotal){
    $this->precioTotal = $precioTotal;
  }
  public function getPrecioTotal(){
    return $this->idColor;
  }


  public function setIdEstado($idEstado){
    $this->idEstado = $idEstado;
  }
  public function getIdEstado(){
    return $this->idEstado;
  }




}
