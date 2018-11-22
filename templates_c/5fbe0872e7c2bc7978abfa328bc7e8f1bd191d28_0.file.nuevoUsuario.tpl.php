<?php
/* Smarty version 3.1.33, created on 2018-11-21 18:26:21
  from 'C:\xampp\htdocs\paginaWeb2\venta_ropa2\templates\nuevoUsuario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf5953d45a7e2_56436685',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5fbe0872e7c2bc7978abfa328bc7e8f1bd191d28' => 
    array (
      0 => 'C:\\xampp\\htdocs\\paginaWeb2\\venta_ropa2\\templates\\nuevoUsuario.tpl',
      1 => 1542821177,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bf5953d45a7e2_56436685 (Smarty_Internal_Template $_smarty_tpl) {
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
