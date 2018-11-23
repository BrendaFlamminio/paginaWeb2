<?php
/* Smarty version 3.1.33, created on 2018-11-22 00:34:53
  from 'C:\xampp\htdocs\ventaRopa\paginaWeb2\venta_ropa2\templates\mostrarSubirImagen.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf5eb9d99b246_00869073',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4df62cbc5d7a4a4f606927a7b7695197a1010c7f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ventaRopa\\paginaWeb2\\venta_ropa2\\templates\\mostrarSubirImagen.tpl',
      1 => 1542843286,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf5eb9d99b246_00869073 (Smarty_Internal_Template $_smarty_tpl) {
?><form class="" action="../nuevaImagen" method="post" enctype="multipart/form-data">
  <table>
      <tr>
        <td>
          <label for="imagen"></label>
        </td>
        <td>
          nombre: <input type="text" name="textNom" >
      </td>
        <td>
          <input type="file" name="imagen" accept="image/jpeg,image/gif,image/x-png" >
      </td>
    </tr>
    <tr>
      <td>
        <button type="submit" name="" value="Enviar imagen">enviar</button>
      </td>
    </tr>
  </table>

</form>
<?php }
}
