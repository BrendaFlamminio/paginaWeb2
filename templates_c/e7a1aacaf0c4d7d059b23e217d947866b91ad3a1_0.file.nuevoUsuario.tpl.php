<?php
/* Smarty version 3.1.33, created on 2018-11-22 23:06:37
  from 'C:\xampp\htdocs\ventaRopa\templates\nuevoUsuario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf7286d1cd248_43314838',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7a1aacaf0c4d7d059b23e217d947866b91ad3a1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ventaRopa\\templates\\nuevoUsuario.tpl',
      1 => 1542829756,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bf7286d1cd248_43314838 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1><?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>
</h1>
<form method="post" action="guardaUsuario">
  <div class="form-group" >
    <label for="exampleInputEmail1">Usuario o email</label>
    <input type="text" class="form-control" name="IdUsuario"  placeholder="Enter email">

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
<?php echo $_smarty_tpl->tpl_vars['Message']->value;?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
