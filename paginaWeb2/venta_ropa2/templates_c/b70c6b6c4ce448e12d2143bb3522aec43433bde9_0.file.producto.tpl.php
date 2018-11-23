<?php
/* Smarty version 3.1.33, created on 2018-11-17 02:02:50
  from 'C:\xampp\htdocs\venta_ropa\templates\producto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bef68ba15c9c2_17602224',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b70c6b6c4ce448e12d2143bb3522aec43433bde9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\venta_ropa\\templates\\producto.tpl',
      1 => 1542416567,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bef68ba15c9c2_17602224 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h2>Productos</h2>
<div class="container">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Precio</th>
      <?php if ($_smarty_tpl->tpl_vars['EsAdmin']->value) {?>
      <th scope="col">Editar</th>
      <th scope="col">Borrar</th>
      <?php } else { ?>
      <th scope="col">Detalle</th>
      <?php }?>
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
      <td><?php echo $_smarty_tpl->tpl_vars['producto']->value['nombre_categoria'];?>
</td>
      <?php if ($_smarty_tpl->tpl_vars['EsAdmin']->value) {?>
      <td><a href="editarProducto/<?php echo $_smarty_tpl->tpl_vars['producto']->value['id_producto'];?>
">EDITAR</a></td>
      <td><a href="borrarProducto/<?php echo $_smarty_tpl->tpl_vars['producto']->value['id_producto'];?>
">BORRAR</a></td>
      <?php } else { ?>
      <td><a href="detalleProducto/<?php echo $_smarty_tpl->tpl_vars['producto']->value['id_producto'];?>
">DETALLE</a></td>
      <?php }?>
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
