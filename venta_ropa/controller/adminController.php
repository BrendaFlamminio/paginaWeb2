<?php

require_once  "./view/AdminView.php";
require_once  "./model/ProductoModel.php";
require_once  "./model/MarcaModel.php";
require_once  "SecuredController.php";

class AdminController extends SecuredController
{
  private $view;
  private $modelMarca;
  private $modelProducto;
  private $modelUsuario;
  private $Titulo;

  function __construct()
  {
    parent::__construct();
     $estalogueado = isset($_SESSION["User"]);
    $this->view = new AdminView();
    $this->modelProducto = new ProductoModel();
    $this->modelMarca = new MarcaModel();
    $this->modelUsuario =new UsuarioModel();
    $this->Titulo = "Administar productos y marcas";
  }

  function Home(){
      $Productos = $this->modelProducto->GetProductos();
      $Marcas = $this->modelMarca->GetMarcas();
      $IsUserLogged = $this->IsUserLogged();
      $this->view->Mostrar($this->Titulo, $Productos, $Marcas,$this->IsUserLogged(),$this->EsAdmin());
  }

  function MostrarUsuario(){
      $Usuarios = $this->modelUsuario->GetUsuario();
      $this->view->MostrarUsuario($this->Titulo, $Usuarios,$this->IsUserLogged(),$this->EsAdmin());
  }
  function permitir($param) {
    $id_producto = $param[0];
    $id_usuario=$this->model->permitir($id_usuario);
  }
  function InsertUsuario(){
    $nombre = $_POST["nombre"];
    $pass = $_POST["pass"];
    $this->model->InsertarUsuario($nombre,$pass);
    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
  }
}

 ?>
