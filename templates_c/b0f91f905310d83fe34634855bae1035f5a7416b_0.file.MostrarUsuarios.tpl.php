<?php
/* Smarty version 3.1.33, created on 2018-11-17 01:34:58
  from 'C:\xampp\htdocs\venta_ropa\templates\MostrarUsuarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bef6232896bd0_91447868',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0f91f905310d83fe34634855bae1035f5a7416b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\venta_ropa\\templates\\MostrarUsuarios.tpl',
      1 => 1542414164,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bef6232896bd0_91447868 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <h1><?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>
</h1>

    <div class="container">
      <ul class="list-group">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Usuarios']->value, 'usuario');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['usuario']->value) {
?>

                <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['usuario']->value['nombre'];?>
 ----- <?php echo $_smarty_tpl->tpl_vars['usuario']->value['pass'];?>
<a href="borrar/<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id'];?>
">BORRAR</a> <a href="permitir/<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id'];?>
">Conceder permisos</a> </li>

            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    </div>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
