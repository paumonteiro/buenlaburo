<?php

Class Prodcuto {

  //Atributos
  Private $idProducto;
  Private $producto;
  Private $precioProducto;
  Private $idCategoria;
  Private $idColor;
  Private $idTalle;
  Private $stock;


  //Funcion constructora
  public function __construct($idProducto,$producto,$precioProducto,$idCategoria,$idColor,$idTalle,$stock){
    $this->idProducto = $idProducto;
    $this->producto = $producto;
    $this->precioProducto = $precioProducto;
    $this->idCategoria = $idCategoria;
    $this->idColor = $idColor;
    $this->idTalle = $idTalle;
    $this->stock = $stock;
  }


  //Métodos de la clase

  public function setIdProducto($idProducto){
    $this->idProducto = $idProducto;
  }
  public function getIdProducto(){
    return $this->idProducto;
  }


  public function setProducto($producto){
    $this->producto = $producto;
  }
  public function getProducto(){
    return $this->producto;
  }


  public function setPrecioProducto($precioProducto){
    $this->precioProducto = $precioProducto;
  }
  public function getPrecioProducto(){
    return $this->precioProducto;
  }


  public function setIdCategoria($idCategoria){
    $this->idCategoria = $idCategoria;
  }
  public function getIdCategoria(){
    return $this->idCategoria;
  }


  public function setIdColor($idColor){
    $this->idColor = $idColor;
  }
  public function getIdColor(){
    return $this->idColor;
  }


  public function setIdTalle($idTalle){
    $this->idTalle = $idTalle;
  }
  public function getIdTalle(){
    return $this->idTalle;
  }


  public function setStock($stock){
    $this->stock = $stock;
  }
  public function getStock(){
    return $this->stock;
  }




}
