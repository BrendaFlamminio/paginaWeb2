<?php
/* Smarty version 3.1.33, created on 2018-11-22 22:58:14
  from 'C:\xampp\htdocs\ventaRopa\venta_ropa2\templates\producto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf726765ea129_91729801',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'abc71a6e1e40e9481783680b3fc267b5f67620c1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ventaRopa\\venta_ropa2\\templates\\producto.tpl',
      1 => 1542919158,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf726765ea129_91729801 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h2>Productos</h2>
<div class="container">
  <div class="row">
  <div class="col-12">
<?php if ($_smarty_tpl->tpl_vars['Editable']->value) {?>
<form class="" action="filtrarProductos" method="post">


    <select name = "marca" >
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Marcas']->value, 'marca');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['marca']->value) {
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['marca']->value['id_marca'];?>
"><?php echo $_smarty_tpl->tpl_vars['marca']->value['nombre'];?>
</option>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
    <button type="submit" name="button">Filter</button>

    </div>
  </div>
</div>
</form>
<?php }?>
  <table class="table">

  <thead>

    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Marca</th>

      <?php if ($_smarty_tpl->tpl_vars['EsAdmin']->value) {?>
      <th scope="col">Editar</th>
      <th scope="col">Borrar</th>
      <?php }?>
      <th scope="col">Detalle</th>
    </tr>
  </thead>
  <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Productos']->value, 'producto');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
?>
    <tr>
      <td><?php echo $_smarty_tpl->tpl_vars['producto']->value['nombre'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['producto']->value['descripcion'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['producto']->value['nombre_marca'];?>
</td>
      
      <?php if ($_smarty_tpl->tpl_vars['EsAdmin']->value) {?>
      <td><a href="editarProducto/<?php echo $_smarty_tpl->tpl_vars['producto']->value['id_producto'];?>
">EDITAR</a></td>
      <td><a href="borrarProducto/<?php echo $_smarty_tpl->tpl_vars['producto']->value['id_producto'];?>
">BORRAR</a></td>
      <?php }?>
        <td><a href="detalleProducto/<?php echo $_smarty_tpl->tpl_vars['producto']->value['id_producto'];?>
" id="detalle">DETALLE</a></td>
    </tr>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </tbody>
</table>

</div>
<?php }
}
