<?php
/* Smarty version 3.1.33, created on 2018-11-22 23:00:08
  from 'C:\xampp\htdocs\ventaRopa\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf726e86cdf37_76266135',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '688ae42fb72708b5781ad698c0ccb5dea4222806' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ventaRopa\\templates\\header.tpl',
      1 => 1542923793,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf726e86cdf37_76266135 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <base href= <?php echo $_smarty_tpl->tpl_vars['Home']->value;?>
>
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
          <?php if (!$_smarty_tpl->tpl_vars['Editable']->value) {?>
          <a class="nav-link active" href="home">Inicio</a>
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['Editable']->value) {?>
          <a class="nav-link active" href="admin">Inicio</a>
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
