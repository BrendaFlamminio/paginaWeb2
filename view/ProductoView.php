<?php
require_once('./libs/Smarty.class.php');
/**
 *
 */
class ProductoView
{
  private $Smarty;
  private $base;
  function __construct()
  {
    $this->Smarty = new Smarty();
    $this->base =  "http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]);
  }

  function Mostrar($Titulo, $Productos,$marcas,$Editable,$EsAdmin){

    $this->Smarty->assign('Titulo',$Titulo); // El 'Titulo' del assign puede ser cualquier valor
    $this->Smarty->assign('Productos',$Productos); // tablas (?)
    $this->Smarty->assign('marcas',$marcas);
    $this->Smarty->assign('Editable',$Editable);
    $this->Smarty->assign('EsAdmin',$EsAdmin);
    $this->Smarty->display('templates/producto.tpl');
    $this->Smarty->assign('base',$this->base);
  }

  function MostrarEditarProducto($Titulo, $Producto, $Marcas,$Editable,$EsAdmin){

    $this->Smarty->assign('Titulo',$Titulo); // El 'Titulo' del assign puede ser cualquier valor
    $this->Smarty->assign('Producto',$Producto);
    $this->Smarty->assign('Marcas',$Marcas);
    $this->Smarty->assign('Home','//'.$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']).'/');
    $this->Smarty->assign('Editable',$Editable);
    $this->Smarty->assign('EsAdmin',$EsAdmin);
    $this->Smarty->display('templates/MostrarEditarProducto.tpl');
    $this->Smarty->assign('base',$this->base);
  }

  function MostrarDetalleProducto($Titulo, $Producto,$imagenes, $Marcas,$Editable,$EsAdmin){

    $this->Smarty->assign('Titulo',$Titulo); // El 'Titulo' del assign puede ser cualquier valor
    $this->Smarty->assign('Producto',$Producto);
    $this->Smarty->assign('imagenes',$imagenes);
    $this->Smarty->assign('Marcas',$Marcas);
    $this->Smarty->assign('Editable',$Editable);
    $this->Smarty->assign('EsAdmin',$EsAdmin);
    $this->Smarty->assign('Home','//'.$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']).'/');
    $this->Smarty->assign('base',$this->base);

    $this->Smarty->display('templates/MostrarDetalleProducto.tpl');

  }

  function MostrarAgregarProducto($Titulo, $Marcas,$Editable,$EsAdmin){

    $this->Smarty->assign('Titulo',$Titulo); // El 'Titulo' del assign puede ser cualquier valor
    //$this->Smarty->assign('Producto',$Producto);
    $this->Smarty->assign('Marcas',$Marcas);
    $this->Smarty->assign('Editable',$Editable);
    $this->Smarty->assign('EsAdmin',$EsAdmin);
    $this->Smarty->assign('Home','//'.$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']).'/');
    $this->Smarty->assign('base',$this->base);


    $this->Smarty->display('templates/MostrarAgregarProducto.tpl');
  }

}

 ?>
