<?php
/* Smarty version 3.1.33, created on 2018-11-18 16:52:20
  from 'C:\xampp\htdocs\ventaRopa\paginaWeb2\venta_ropa\templates\nuevoUsuario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf18ab4e91283_63276190',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0a3edc1f56590c7e69f0a329f0b6bce802ffe0f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ventaRopa\\paginaWeb2\\venta_ropa\\templates\\nuevoUsuario.tpl',
      1 => 1542460316,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bf18ab4e91283_63276190 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1><?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>
</h1>
<form method="post" action="guardaUsuario">
  <div class="form-group" >
    <label for="exampleInputEmail1">Usuario o email</label>
    <input type="email" class="form-control" name="IdUsuario"  placeholder="Enter email">

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Contraseña</label>
    <input type="password" class="form-control" name="IdPassword" placeholder="Password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" name="">
    <label class="form-check-label" for="exampleCheck1">Estoy de acuerdo</label>
  </div>
  <button type="submit" class="btn btn-primary">Registrarme</button>
</form>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
