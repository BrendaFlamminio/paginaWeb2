<?php
require('./libs/Smarty.class.php');
/**
 *
 */
class HomeView
{
  private $Smarty;
  function __construct()
  {
    $this->Smarty = new Smarty();
  }

  function Mostrar($Titulo, $Productos, $Marcas, $Editable,$EsAdmin ){

    $this->Smarty->assign('Titulo',$Titulo); // El 'Titulo' del assign puede ser cualquier valor
    $this->Smarty->assign('Productos',$Productos); // tablas (?)
    $this->Smarty->assign('Marcas',$Marcas);
    $this->Smarty->assign('Editable',$Editable);
    $this->Smarty->assign('EsAdmin',$EsAdmin);
    $this->Smarty->assign('Home','//'.$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']).'/');

    //$this->Smarty->assign('base',$this->base);
    //$smarty->debugging = true;
    $this->Smarty->display('templates/home.tpl');
  }


}

 ?>
