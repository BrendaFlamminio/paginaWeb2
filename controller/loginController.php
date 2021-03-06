<?php

require_once  "./view/LoginView.php";
require_once  "./model/UsuarioModel.php";


class LoginController
{
  private $view;
  private $model;
  private $Titulo;

  function __construct()
  {
    $this->view = new LoginView();
    $this->model = new UsuarioModel();
    $this->Titulo = "Login";
  }

  function login(){

    $this->view->mostrarLogin();

  }


  function logout(){
    session_start();
    session_destroy();
    header(HOME);
  }

  function verificarLogin(){
      $user = $_POST["usuarioId"];
      $pass = $_POST["passwordId"];
      $dbUser = $this->model->getUser($user);

      if(isset($dbUser)){
          //Generate hash pass with http://www.passwordtool.hu/php5-password-hash-generator
          //$hash = password_hash($pass, PASSWORD_DEFAULT);
          if (password_verify($pass,$dbUser["pass"])){
          //if ($pass == $dbUser[0]["pass"]){
              //mostrar lista de tareas
              session_start();
              $_SESSION["User"] = $dbUser;
              header(ADMIN);
          }else{
            $this->view->mostrarLogin("Contraseña incorrecta");
          }
      }else{
        //No existe el usario
        $this->view->mostrarLogin("No existe el usario");
      }

  }
  function RegistrarUsuario(){
    $this->view->mostrarRegistro();
  }
  function GuardarUsuario(){
    $user = $_POST["IdUsuario"];
    $pass = $_POST["IdPassword"];
    $usuarioExistente = $this->model->GetUser($user);
    if (isset($usuarioExistente['nombre'])) {

      $this->view->mostrarRegistro("Este nombre ya existe");
    }
    else{
    $hash = password_hash($pass, PASSWORD_DEFAULT);
    $dbUser = $this->model->InsertarUsuario($user,$hash);
    session_start();
    $_SESSION["User"] = $user;
    header(ADMIN);
    }
  }
}

 ?>
