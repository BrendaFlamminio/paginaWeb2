<?php
/* Smarty version 3.1.33, created on 2018-11-21 03:05:31
  from 'C:\xampp\htdocs\venta_ropa2\templates\MostrarDetalleProducto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf4bd6b1b4460_07056709',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10fbddfc8e569ad2772fd4af9555602c3e28e2ef' => 
    array (
      0 => 'C:\\xampp\\htdocs\\venta_ropa2\\templates\\MostrarDetalleProducto.tpl',
      1 => 1542765892,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bf4bd6b1b4460_07056709 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <h1><?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>
</h1>


    <div class="container">
      <h2>Detalle</h2>

        <div class="form-group">
          <label for="nombreForm">Nombre</label>
          <input type="text" class="form-control" id='nombreForm' name="nombreForm" value="<?php echo $_smarty_tpl->tpl_vars['Producto']->value['nombre'];?>
">

        <div class="form-group">
          <label for="precioForm">Precio</label>
          <input type="text" class="form-control" id="precioForm" name="precioForm" value="<?php echo $_smarty_tpl->tpl_vars['Producto']->value["precio"];?>
" readonly="readonly">
        </div>
        <div class="form-group">
          <label for="descripcionForm">Descripcion</label>
          <input type="text" class="form-control" id="descripcionForm" name="descripcionForm" value="<?php echo $_smarty_tpl->tpl_vars['Producto']->value["descripcion"];?>
" readonly="readonly">
        </div>
        <div class="form-group">
          <label for="materialForm">Material</label>
          <input type="text" class="form-control" id="materialForm" name="materialForm" value="<?php echo $_smarty_tpl->tpl_vars['Producto']->value["material"];?>
" readonly="readonly">
        </div>
        <div class="form-group">
          <label for="marcaForm">Marca</label>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Marcas']->value, 'marca');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['marca']->value) {
?>
              <?php if ($_smarty_tpl->tpl_vars['Producto']->value['id_marca'] == $_smarty_tpl->tpl_vars['marca']->value['id_marca']) {?>
                <input type="text" class="form-control" id="marcaForm" name="materialForm" value="<?php echo $_smarty_tpl->tpl_vars['marca']->value["nombre"];?>
" readonly="readonly">
              <?php }?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


            <button type="button" name="button" id="traerComments">Ver Comentarios</button>
        </div>
        <div id="container">

        </div>
    </div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
