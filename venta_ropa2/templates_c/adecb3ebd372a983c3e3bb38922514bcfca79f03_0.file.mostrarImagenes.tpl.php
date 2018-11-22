<?php
/* Smarty version 3.1.33, created on 2018-11-22 15:33:05
  from 'C:\xampp\htdocs\ventaRopa\paginaWeb2\venta_ropa2\templates\mostrarImagenes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf6be211ea202_59135409',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'adecb3ebd372a983c3e3bb38922514bcfca79f03' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ventaRopa\\paginaWeb2\\venta_ropa2\\templates\\mostrarImagenes.tpl',
      1 => 1542891510,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf6be211ea202_59135409 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <p>essaa</p>
  <div class="carousel-inner">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['imagenes']->value, 'imagen');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['imagen']->value) {
?>
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['direccion'];?>
" alt="First slide">
        <?php if ($_smarty_tpl->tpl_vars['EsAdmin']->value) {?>
        <a href="deleteImagen/<?php echo $_smarty_tpl->tpl_vars['imagen']->value['id_imagen'];?>
">delete</a>
        <?php }?>
    </div>

    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <?php if ($_smarty_tpl->tpl_vars['EsAdmin']->value) {?>
    <form class="" action="../nuevaImagen" method="post" enctype="multipart/form-data">
      <input type="hidden" class="form-control" id="idForm" name="idForm" value="<?php echo $_smarty_tpl->tpl_vars['']->value['id'];?>
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
<?php }
}
