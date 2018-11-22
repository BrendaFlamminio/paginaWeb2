<?php
//require_once('./libs/Smarty.class.php');
/**
 *
 */
class MarcaView
{
  private $Smarty;

  function __construct()
  {
    $this->Smarty = new Smarty();

  }

  function Mostrar($Titulo, $Marcas,$Editable,$EsAdmin){

    $this->Smarty->assign('Titulo',$Titulo); // El 'Titulo' del assign puede ser cualquier valor
    $this->Smarty->assign('Marcas',$Marcas); // tablas (?)
    $this->Smarty->assign('Editable',$Editable);
    $this->Smarty->assign('EsAdmin',$EsAdmin);
    $this->Smarty->display('templates/marca.tpl');
  }

  function MostrarEditarMarca($Titulo, $Marca,$Editable,$EsAdmin){

    $this->Smarty->assign('Titulo',$Titulo); // El 'Titulo' del assign puede ser cualquier valor
    $this->Smarty->assign('Marca',$Marca);
    $this->Smarty->assign('Editable',$Editable);
    $this->Smarty->assign('EsAdmin',$EsAdmin);
    $this->Smarty->assign('Home','//'.$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']).'/');

    //$smarty->debugging = true;
    $this->Smarty->display('templates/MostrarEditarMarca.tpl');
  }

  function MostrarAgregarMarca($Titulo,$Editable,$EsAdmin){

    $this->Smarty->assign('Titulo',$Titulo); // El 'Titulo' del assign puede ser cualquier valor
    //$this->Smarty->assign('Producto',$Producto);
    //$this->Smarty->assign('Marcas',$Marcas);
    $this->Smarty->assign('Editable',$Editable);
    $this->Smarty->assign('EsAdmin',$EsAdmin);
    $this->Smarty->assign('Home','//'.$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']).'/');
    $this->Smarty->display('templates/MostrarAgregarMarca.tpl');
  }

  function MostrarDetalleMarca($Titulo, $Marca,$Editable,$EsAdmin){

    $this->Smarty->assign('Titulo',$Titulo); // El 'Titulo' del assign puede ser cualquier valor
    $this->Smarty->assign('Marca',$Marca);
    $this->Smarty->assign('Editable',$Editable);
    $this->Smarty->assign('EsAdmin',$EsAdmin);
    $this->Smarty->assign('Home','//'.$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']).'/');

    //$smarty->debugging = true;
    $this->Smarty->display('templates/MostrarDetalleMarca.tpl');
  }

}

 ?>
