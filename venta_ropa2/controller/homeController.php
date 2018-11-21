<?php

require_once  "./view/homeView.php";
require_once  "./view/ProductoView.php";
require_once  "./view/MarcaView.php";
require_once  "./model/ProductoModel.php";
require_once  "./model/MarcaModel.php";
require_once  "SecuredController.php";

class HomeController extends SecuredController
{
  private $view;
  private $viewProducto;
  private $viewMarca;
  private $modelMarca;
  private $modelProducto;
  private $Titulo;

  function __construct()
  {

    $this->view = new HomeView();
    $this->viewProducto = new ProductoView();
    $this->viewMarca = new MarcaView();
    $this->modelProducto = new ProductoModel();
    $this->modelMarca = new MarcaModel();
    $this->Titulo = "Ver productos y marcas";
  }

  function Home(){
      $Productos = $this->modelProducto->GetProductos();
      $Marcas = $this->modelMarca->GetMarcas();
      $this->view->Mostrar($this->Titulo, $Productos, $Marcas,$this->IsUserLogged(),$this->EsAdmin());

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

      $this->viewProducto->MostrarDetalleProducto("Ver Producto", $Producto, $Marcas,$this->IsUserLogged(),$this->EsAdmin());
  }

  function MostrarDetalleMarca($param){
      $id_marca = $param[0];
      $Marca = $this->modelMarca->GetMarca($id_marca);
      $this->viewMarca->MostrarDetalleMarca("Ver Marca", $Marca,$this->IsUserLogged(),$this->EsAdmin());
  }

}


 ?>
