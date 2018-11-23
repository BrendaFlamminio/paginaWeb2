<?php
class LoginView
{
  private $Smarty;
  private $base;
  function __construct($estalogueado = false)
  {
    $this->Smarty = new Smarty();
    $this->Smarty->assign('Editable',$estalogueado);
    $this->base =  "http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]);
  }


  function mostrarLogin($message = ''){

    $this->Smarty->assign('Titulo',"Login"); // El 'Titulo' del assign puede ser cualquier valor
    $this->Smarty->assign('Message',$message); // El 'Titulo' del assign puede ser cualquier valor
    $this->Smarty->assign('Home',"http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
    $this->Smarty->display('templates/login.tpl');
  //  $this->Smarty->assign('base',$this->base);

  }
function mostrarRegistro($message=''){
  $this->Smarty->assign('Titulo',"Formulario de registro"); // El 'Titulo' del assign puede ser cualquier valor
  $this->Smarty->assign('Message',$message); // El 'Titulo' del assign puede ser cualquier valor
  $this->Smarty->assign('Home',"http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
  $this->Smarty->display('templates/nuevoUsuario.tpl');
  //$this->Smarty->assign('base',$this->base);
  }
}

 ?>
