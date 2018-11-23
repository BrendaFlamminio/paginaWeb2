<?php
/* Smarty version 3.1.33, created on 2018-11-20 18:25:37
  from 'C:\xampp\htdocs\venta_ropa2\templates\MostrarUsuarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf443919dc274_47285088',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df5e9735125a070e25bffe49eda6704531ddb3ed' => 
    array (
      0 => 'C:\\xampp\\htdocs\\venta_ropa2\\templates\\MostrarUsuarios.tpl',
      1 => 1542734392,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bf443919dc274_47285088 (Smarty_Internal_Template $_smarty_tpl) {
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
