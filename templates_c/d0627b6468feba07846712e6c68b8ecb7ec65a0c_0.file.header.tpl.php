<?php
/* Smarty version 3.1.33, created on 2018-11-20 18:23:09
  from 'C:\xampp\htdocs\venta_ropa2\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf442fd3e7631_25506632',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0627b6468feba07846712e6c68b8ecb7ec65a0c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\venta_ropa2\\templates\\header.tpl',
      1 => 1542734392,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf442fd3e7631_25506632 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title><?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>
</title>
  </head>
  <body>
    <div class="container">
      <div class="row ">
        <div class="col-12 col-md-3 logo">
              <img src="images/logo.jpg"class="img-responsive " class="logo" alt="logo Amsterdam">
        </div>
      </div>
    </div>
      <div class="container">
        <nav class="nav">
          <a class="nav-link active" href="home">Inicio</a>
          <?php if ($_smarty_tpl->tpl_vars['Editable']->value) {?>
              <?php if ($_smarty_tpl->tpl_vars['EsAdmin']->value) {?>
                  <a class="nav-link" href="agregarMarca">Nueva marca</a>
                  <a class="nav-link" href="nuevoProducto">Nuevo producto</a>
                  <a class="nav-link" href="mostrarUsuarios">Administar usuarios</a>
              <?php }?>
              <a class="nav-link " href="CerrarSesion">Cerrar Sesion</a>
        <?php } else { ?>
        <a class="nav-link" href="nuevoUsuario">Registrarse</a>
        <a class="nav-link " href="login">Iniciar Sesion</a>
        <?php }?>

      </div>
<?php }
}
