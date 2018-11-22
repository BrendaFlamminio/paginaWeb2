<?php
   require_once  "SecuredController.php";
  require_once "./model/ImagenModel.php";
  require_once "./view/ImagenView.php";
  require_once "homeController.php";
  class ImagenController extends SecuredController
  {
    private $model;
    private $view;
    private $home;
    function __construct()
    {

      $this->model = new ImagenModel();
      $this->view = new ImagenView();
      $this->home = new HomeController();
    }

    function getImagenes($param){
      session_start();
      $imagenes = $this->model->getImagenes($param);
      $this->view->mostrar("imagenes",$imagenes,$this->EsAdmin());
    }

    function deleteImagen($param){
      $this->model->deleteImagen($param[0]);
      header(ADMIN);

    }

    function postImagen($param){
      $id_producto= $_POST['idForm'];
      $name= $_REQUEST['textNom'];
      $ruta =$_FILES['imagen']['tmp_name'];
      $type = $_FILES['imagen']['type'];
      $arrayType= explode("/",$type);
      $destino ="images/".$name.".".$arrayType[1];

      move_uploaded_file($ruta,$destino);
      $this->model->postImagen($name,$destino,$param[0]);
      header(ADMIN);
    }

  }




 ?>
