<?php
 //require('./libs/Smarty.class.php');

 class ImagenView {
   private $Smarty;

   function __construct(){
      $this->Smarty = new Smarty();
   }

   function Mostrar($Titulo, $imagenes,$EsAdmin ){

     $this->Smarty->assign('Titulo',$Titulo); // El 'Titulo' del assign puede ser cualquier valor
     $this->Smarty->assign('imagenes',$imagenes); // tablas (?)
     $this->Smarty->assign('EsAdmin',$EsAdmin);
     $this->Smarty->assign('Home','//'.$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']).'/');
     //$smarty->debugging = true;
     $this->Smarty->display('templates/mostrarImagenes.tpl');
   }


 }





 ?>
