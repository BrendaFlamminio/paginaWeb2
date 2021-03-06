<?php

require_once  "./view/homeView.php";
require_once  "./view/ProductoView.php";
require_once  "./view/MarcaView.php";
require_once  "./model/ProductoModel.php";
require_once  "./model/MarcaModel.php";
require_once "./model/imagenModel.php";
require_once  "SecuredController.php";

class HomeController extends SecuredController
{
  private $view;
  private $viewProducto;
  private $viewMarca;
  private $modelMarca;
  private $modelProducto;
  private $Titulo;
  private $modelImagen;
  private $id_user;
  function __construct()
  {

    $this->view = new HomeView();
    $this->viewProducto = new ProductoView();
    $this->viewMarca = new MarcaView();
    $this->modelProducto = new ProductoModel();
    $this->modelMarca = new MarcaModel();
    $this->modelImagen= new ImagenModel();
    $this->Titulo = "Ver productos y marcas";
    //$this->id_user =  $_SESSION["User"]["id"];
  }

  function Home(){
      $Productos = $this->modelProducto->GetProductos();
      $Marcas = $this->modelMarca->GetMarcas();
      $this->view->Mostrar($this->Titulo, $Productos, $Marcas,$this->IsUserLogged(),$this->EsAdmin());
      //header(LOGIN);

  }

    function filtrarPorMarca(){
    $id_marca =$_POST["marca"];
    $Marcas = $this->modelMarca->GetMarcas();
    $productosFiltrados = $this ->modelProducto->GetProductosFiltrados($id_marca);
    session_start();
    $this->view->Mostrar($this->Titulo,$productosFiltrados,$Marcas,$this->IsUserLogged(),$this->EsAdmin());

  }

  function MostrarDetalleProducto($param){

      $id_producto = $param[0];
      $Producto = $this->modelProducto->GetProducto($id_producto);
      $Marcas = $this->modelMarca->GetMarcas();
      $imagenes = $this->modelImagen->getImagenes($id_producto);
      session_start();
      $this->viewProducto->MostrarDetalleProducto("Ver Producto", $Producto,$imagenes, $Marcas,$this->IsUserLogged(),$this->EsAdmin(),$this->idUsuario());

  }

  function MostrarDetalleMarca($param){
      $id_marca = $param[0];
      $Marca = $this->modelMarca->GetMarca($id_marca);
      $this->viewMarca->MostrarDetalleMarca("Ver Marca", $Marca,$this->IsUserLogged(),$this->EsAdmin());

  }

}


 ?>
