<?php
require_once('./libs/Smarty.class.php');
/**
 *
 */
class ProductoView
{
  private $Smarty;

  function __construct()
  {
    $this->Smarty = new Smarty();

  }

  function Mostrar($Titulo, $Productos,$marcas,$Editable,$EsAdmin){

    $this->Smarty->assign('Titulo',$Titulo); // El 'Titulo' del assign puede ser cualquier valor
    $this->Smarty->assign('Productos',$Productos); // tablas (?)
    $this->Smarty->assign('marcas',$marcas);
    $this->Smarty->assign('Editable',$Editable);
    $this->Smarty->assign('EsAdmin',$EsAdmin);
    $this->Smarty->display('templates/producto.tpl');
  }

  function MostrarEditarProducto($Titulo, $Producto, $Marcas,$Editable,$EsAdmin){

    $this->Smarty->assign('Titulo',$Titulo); // El 'Titulo' del assign puede ser cualquier valor
    $this->Smarty->assign('Producto',$Producto);
    $this->Smarty->assign('Marcas',$Marcas);
    $this->Smarty->assign('Home',"http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
    $this->Smarty->assign('Editable',$Editable);
    $this->Smarty->assign('EsAdmin',$EsAdmin);
    $this->Smarty->display('templates/MostrarEditarProducto.tpl');
  }

  function MostrarDetalleProducto($Titulo, $Producto, $Marcas,$Editable,$EsAdmin){

    $this->Smarty->assign('Titulo',$Titulo); // El 'Titulo' del assign puede ser cualquier valor
    $this->Smarty->assign('Producto',$Producto);
    $this->Smarty->assign('Marcas',$Marcas);
    $this->Smarty->assign('Editable',$Editable);
    $this->Smarty->assign('EsAdmin',$EsAdmin);
    $this->Smarty->assign('Home',"http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));


    $this->Smarty->display('templates/MostrarDetalleProducto.tpl');
  }

  function MostrarAgregarProducto($Titulo, $Marcas,$Editable,$EsAdmin){

    $this->Smarty->assign('Titulo',$Titulo); // El 'Titulo' del assign puede ser cualquier valor
    //$this->Smarty->assign('Producto',$Producto);
    $this->Smarty->assign('Marcas',$Marcas);
    $this->Smarty->assign('Editable',$Editable);
    $this->Smarty->assign('EsAdmin',$EsAdmin);
    $this->Smarty->assign('Home',"http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));


    $this->Smarty->display('templates/MostrarAgregarProducto.tpl');
  }

}

 ?>
