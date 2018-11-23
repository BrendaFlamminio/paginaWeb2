<?php
/* Smarty version 3.1.33, created on 2018-11-17 15:24:39
  from 'C:\xampp\htdocs\ventaRopa\paginaWeb2\venta_ropa\templates\MostrarDetalleMarca.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf024a76ff0a6_09651986',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16a445ec5dda55b0d0330bf606452d639665714b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ventaRopa\\paginaWeb2\\venta_ropa\\templates\\MostrarDetalleMarca.tpl',
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
function content_5bf024a76ff0a6_09651986 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <h1><?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>
</h1>


    <div class="container">
      <h2>Detalle</h2>
      <form>
        <div class="form-group">
          <label for="nombreForm">Nombre</label>
          <input type="text" class="form-control" id="nombreForm" name="nombreForm" value="<?php echo $_smarty_tpl->tpl_vars['Marca']->value["nombre"];?>
" readonly="readonly">
        </div>
        <div class="form-group">
          <label for="site_urlForm">siteurl</label>
          <input type="text" class="form-control" id="site_urlForm" name="site_urlForm" value="<?php echo $_smarty_tpl->tpl_vars['Marca']->value["site_url"];?>
" readonly="readonly">
        </div>
        <div class="form-group">
          <label for="emailForm">Email</label>
          <input type="text" class="form-control" id="emailForm" name="emailForm" value="<?php echo $_smarty_tpl->tpl_vars['Marca']->value["email"];?>
" readonly="readonly">
        </div>
      </form>
    </div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
