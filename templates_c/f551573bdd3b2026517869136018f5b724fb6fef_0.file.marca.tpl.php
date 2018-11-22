<?php
/* Smarty version 3.1.33, created on 2018-11-22 22:58:14
  from 'C:\xampp\htdocs\ventaRopa\venta_ropa2\templates\marca.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf72676729c18_71474726',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f551573bdd3b2026517869136018f5b724fb6fef' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ventaRopa\\venta_ropa2\\templates\\marca.tpl',
      1 => 1542809964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf72676729c18_71474726 (Smarty_Internal_Template $_smarty_tpl) {
?><h2>Marcas</h2>
<div class="container">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">SiteUrl</th>
      <th scope="col">Email</th>
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Marcas']->value, 'marca');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['marca']->value) {
?>
    <tr>
      <td><?php echo $_smarty_tpl->tpl_vars['marca']->value['nombre'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['marca']->value['site_url'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['marca']->value['email'];?>
</td>
      <?php if ($_smarty_tpl->tpl_vars['EsAdmin']->value) {?>
      <td><a href="editarMarca/<?php echo $_smarty_tpl->tpl_vars['marca']->value['id_marca'];?>
">EDITAR</a></td>
      <td><a href="borrarMarca/<?php echo $_smarty_tpl->tpl_vars['marca']->value['id_marca'];?>
">BORRAR</a></td>
      <?php } else { ?>
      <td><a href="detalleMarca/<?php echo $_smarty_tpl->tpl_vars['marca']->value['id_marca'];?>
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
