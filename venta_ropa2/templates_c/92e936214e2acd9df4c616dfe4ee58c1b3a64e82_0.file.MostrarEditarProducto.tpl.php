<?php
/* Smarty version 3.1.33, created on 2018-11-21 22:16:37
  from 'C:\xampp\htdocs\ventaRopa\paginaWeb2\venta_ropa2\templates\MostrarEditarProducto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf5cb35d44967_08535504',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92e936214e2acd9df4c616dfe4ee58c1b3a64e82' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ventaRopa\\paginaWeb2\\venta_ropa2\\templates\\MostrarEditarProducto.tpl',
      1 => 1542809964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bf5cb35d44967_08535504 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <h1><?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>
</h1>


    <div class="container">
      <h2>Formulario</h2>
      <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['Home']->value;?>
/guardarEditar">
        <input type="hidden" class="form-control" id="idForm" name="idForm" value="<?php echo $_smarty_tpl->tpl_vars['Producto']->value["id_producto"];?>
">
        <div class="form-group">
          <label for="nombreForm">Nombre</label>
          <input type="text" class="form-control" id="nombreForm" name="nombreForm" value="<?php echo $_smarty_tpl->tpl_vars['Producto']->value["nombre"];?>
">
        </div>
        <div class="form-group">
          <label for="precioForm">Precio</label>
          <input type="text" class="form-control" id="precioForm" name="precioForm" value="<?php echo $_smarty_tpl->tpl_vars['Producto']->value["precio"];?>
">
        </div>
        <div class="form-group">
          <label for="descripcionForm">Descripcion</label>
          <input type="text" class="form-control" id="descripcionForm" name="descripcionForm" value="<?php echo $_smarty_tpl->tpl_vars['Producto']->value["descripcion"];?>
">
        </div>
        <div class="form-group">
          <label for="materialForm">Material</label>
          <input type="text" class="form-control" id="materialForm" name="materialForm" value="<?php echo $_smarty_tpl->tpl_vars['Producto']->value["material"];?>
">
        </div>
        <div class="form-group">
          <label for="marcaForm">Marca</label>
          <select id="marcaForm" name="marcaForm" class="form-control">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Marcas']->value, 'marca');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['marca']->value) {
?>
              <?php if ($_smarty_tpl->tpl_vars['Producto']->value['id_marca'] == $_smarty_tpl->tpl_vars['marca']->value['id_marca']) {?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['marca']->value['id_marca'];?>
" selected=true><?php echo $_smarty_tpl->tpl_vars['marca']->value['nombre'];?>
</option>
              <?php } else { ?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['marca']->value['id_marca'];?>
"><?php echo $_smarty_tpl->tpl_vars['marca']->value['nombre'];?>
</option>
              <?php }?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </form>
    </div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
