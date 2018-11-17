<?php
class LoginView
{
  private $Smarty;

  function __construct($estalogueado = false)
  {
    $this->Smarty = new Smarty();
    $this->Smarty->assign('Editable',$estalogueado);
  }


  function mostrarLogin($message = ''){

    $this->Smarty->assign('Titulo',"Login"); // El 'Titulo' del assign puede ser cualquier valor
    $this->Smarty->assign('Message',$message); // El 'Titulo' del assign puede ser cualquier valor

    $this->Smarty->display('templates/login.tpl');
  }
function mostrarRegistro($message=''){
  $this->Smarty->assign('Titulo',"Formulario de registro"); // El 'Titulo' del assign puede ser cualquier valor
  $this->Smarty->assign('Message',$message); // El 'Titulo' del assign puede ser cualquier valor

  $this->Smarty->display('templates/nuevoUsuario.tpl');
  }
}

 ?>
