<?php
/**
 *
 */
class UsuarioModel
{
  private $db;

  function __construct()
  {
    $this->db = $this->Connect();
  }

  function Connect(){
      return new PDO('mysql:host=localhost;'
      .'dbname=venta_ropa;charset=utf8'
      ,'root', '');
  }

  function GetUsuario(){
      $sentencia = $this->db->prepare( "select * from usuario");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }
  function permitir($id_usuario,$admin){
      $sentencia = $this->db->prepare( "update usuario set admin=? where id=?");
      $sentencia->execute(array($admin,$id_usuario));

  }

  function InsertarUsuario($nombre, $pass){
    $sentencia = $this->db->prepare("INSERT INTO usuario(nombre, pass) VALUES(?,?)");
    $sentencia->execute(array($nombre, $pass));
  }

  function GetUser($user){

      $sentencia = $this->db->prepare( "select * from usuario where nombre=? limit 1");
      $sentencia->execute(array($user));
      return $sentencia->fetch(PDO::FETCH_ASSOC);
  }


}





 ?>
