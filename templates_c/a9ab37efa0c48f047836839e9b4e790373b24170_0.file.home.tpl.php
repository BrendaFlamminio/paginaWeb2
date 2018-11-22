<?php
/* Smarty version 3.1.33, created on 2018-11-20 18:23:09
  from 'C:\xampp\htdocs\venta_ropa2\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf442fd010a49_31914419',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9ab37efa0c48f047836839e9b4e790373b24170' => 
    array (
      0 => 'C:\\xampp\\htdocs\\venta_ropa2\\templates\\home.tpl',
      1 => 1542734392,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:producto.tpl' => 1,
    'file:marca.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bf442fd010a49_31914419 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1><?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>
</h1>

  <?php $_smarty_tpl->_subTemplateRender("file:producto.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  

<?php $_smarty_tpl->_subTemplateRender("file:marca.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
