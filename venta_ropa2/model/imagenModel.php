<?php

class ImagenModel {
  private $db;

  function __construct(){
    $this->db = $this->Connect();

  }

  function Connect(){
    return new PDO('mysql:host=localhost;'
    .'dbname=venta_ropa;charset=utf8'
    ,'root', '');
  }

  function getImagenes($id_producto){
    $sentecia = $this->db->prepare("SELECT * from imagen where id_producto = ?");
    $sentecia->execute(array($id_producto));
    return $sentencia->fetchAll(PDP::FETCH_ASSOC);
  }


  function deleteImagen($id_imagen){
    $sentencia = $this->db->prepare("DELETE from imagen where id_imagen=?");
    $sentencia->execute(array($id_imagen));

  }

  function postImagen($name,$direccion,$id_producto){
    $sentencia = $this->db->prepare("INSERT INTO imagen (name,direccion,id_producto) VALUES (?,?,?)");
    $sentencia-> execute(array($name,$direccion,$id_producto));

  }


  }








 ?>
