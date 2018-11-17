<?php

class SecuredController
{

  function __construct(){
    session_start();
    if(isset($_SESSION["User"])){
      if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 100000)) {
        $this->logout(); // destruye la sesión, y vuelve al login
      }
        $_SESSION['LAST_ACTIVITY'] = time(); // actualiza el último instante de actividad
    }else{
        header(LOGIN);
    }
  }

  function logout(){
    session_start();
    session_destroy();
    header(LOGIN);
  }

  function IsUserLogged(){
      return isset($_SESSION["User"]);
  }
  function EsAdmin(){
    if(isset($_SESSION)){
     if ($_SESSION["User"]['admin'] == '1')
    return true;
    else
      return false;
    }
    else {
      return false;
    }
  }
}

 ?>
