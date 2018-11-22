<?php
/* Smarty version 3.1.33, created on 2018-11-22 15:59:39
  from 'C:\xampp\htdocs\ventaRopa\paginaWeb2\venta_ropa2\templates\MostrarDetalleProducto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf6c45b4d20d4_56431089',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd695b90a36547ccbc361bbfa5eca0680ddceaf5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ventaRopa\\paginaWeb2\\venta_ropa2\\templates\\MostrarDetalleProducto.tpl',
      1 => 1542898766,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bf6c45b4d20d4_56431089 (Smarty_Internal_Template $_smarty_tpl) {
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


        <a href="../api/comentario/<?php echo $_smarty_tpl->tpl_vars['Producto']->value['id_producto'];?>
">Ver comentarios</a>
        </div>
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['imagenes']->value, 'imagen');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['imagen']->value) {
?>
            <div class="carousel-item active">
              <img class="d-block w-100" src="../<?php echo $_smarty_tpl->tpl_vars['imagen']->value['direccion'];?>
" alt="First slide">
                <?php if ($_smarty_tpl->tpl_vars['EsAdmin']->value) {?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['Home']->value;?>
/borrarImagen/<?php echo $_smarty_tpl->tpl_vars['imagen']->value['id_imagen'];?>
">delete</a>
                <?php }?>
            </div>

            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            <?php if ($_smarty_tpl->tpl_vars['EsAdmin']->value) {?>
            <form class="" action="../nuevaImagen/<?php echo $_smarty_tpl->tpl_vars['Producto']->value['id_producto'];?>
" method="post" enctype="multipart/form-data">
              <input type="hidden" class="form-control" id="idForm" name="idForm" value="<?php echo $_smarty_tpl->tpl_vars['Producto']->value['id_producto'];?>
">
              <table>
                  <tr>
                    <td>
                      <label for="imagen"></label>
                    </td>
                    <td>
                      nombre: <input type="text" name="textNom" >
                  </td>
                    <td>
                      <input type="file" name="imagen" accept="image/jpeg,image/gif,image/x-png image" >
                  </td>
                </tr>
                <tr>
                  <td>
                    <button type="submit" name="" value="Enviar imagen">enviar</button>
                  </td>
                </tr>
              </table>

            </form>
            <?php }?>

          </div>
        </div>
        <div id="container">

        </div>
    </div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
