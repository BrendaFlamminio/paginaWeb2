<?php
  class ComentarioModel{
    private $db;

    function __construct(){
      $this->db-> $this->connect();

    }

    private function connect(){
      return new PDO('mysql:host=localhost;'
      .'dbname=venta_ropa;charset=utf8'
      ,'root', '');
    }

    public function getComentarios($id_producto ){
      $sentencia = $this->db->prepare("select * from comentario where id_producto = ?");
      $sentencia->execute(array($id_producto));
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getComentarios(){
      $sentencia = $this->db->prepare("select * from comentario ");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }


    public function deleteComentario($id){
      $sentencia = $this->db->prepare("delete from comentario where id_comentario= ?");
      $sentencia->execute($id);
    }

    public function updateComentario($texto,$puntaje,$id_user,$id_producto){
      $sentecia = $this->db->prepare("INSERT INTO comentario(texto,puntaje,id_user,id_producto) values(?,?,?,?)");
      $sentencia->execute(array($texto,$puntaje,$id_user,$id_producto));
    }

  }





 ?>
