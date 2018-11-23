<?php
/* Smarty version 3.1.33, created on 2018-11-18 16:58:14
  from 'C:\xampp\htdocs\ventaRopa\paginaWeb2\venta_ropa\templates\admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf18c16b09a48_00272888',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49f73035f4241224d18b0017bbfaced20c011909' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ventaRopa\\paginaWeb2\\venta_ropa\\templates\\admin.tpl',
      1 => 1542460316,
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
function content_5bf18c16b09a48_00272888 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1><?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>
</h1>


<?php $_smarty_tpl->_subTemplateRender("file:producto.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:marca.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
