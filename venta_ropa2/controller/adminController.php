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
  private $Editable;
  private $EsAdmin;

  function __construct()
  {
    parent::__construct();
     $estalogueado = isset($_SESSION["User"]);
    $this->view = new AdminView();
    $this->modelProducto = new ProductoModel();
    $this->modelMarca = new MarcaModel();
    $this->modelUsuario =new UsuarioModel();
    $this->Editable= parent::IsUserLogged();
    $this->EsAdmin= parent::EsAdmin();
    $this->Titulo = "Administar productos y marcas";
  }

  function Home(){
      $Productos = $this->modelProducto->GetProductos();
      $Marcas = $this->modelMarca->GetMarcas();
      $IsUserLogged = $this->IsUserLogged();
      $this->view->Mostrar($this->Titulo, $Productos, $Marcas,$this->Editable,$this->EsAdmin);
  }

  function MostrarUsuario(){
      $Usuarios = $this->modelUsuario->GetUsuario();
      $this->view->MostrarUsuario($this->Titulo, $Usuarios,$this->Editable,$this->EsAdmin);
  }
  function permitir($params) {
    $id_usuario = $params[0];
    $admin=$params[1];
    $this->modelUsuario->permitir($id_usuario,$admin);
    $this->MostrarUsuario();
  }
  function InsertUsuario(){
    $nombre = $_POST["nombre"];
    $pass = $_POST["pass"];

    $this->modelUsuario->InsertarUsuario($nombre,$pass);
    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
  }

}

 ?>
