
<h2>Productos</h2>
<div class="container">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Precio</th>
      {if $EsAdmin }
      <th scope="col">Editar</th>
      <th scope="col">Borrar</th>
      {else}
      <th scope="col">Detalle</th>
      {/if}
    </tr>
  </thead>
  <tbody>
    {foreach from=$Productos item=producto}
    <tr>
      <td>{$producto['nombre']}</td>
      <td>{$producto['descripcion']}</td>
      <td>{$producto['nombre_categoria']}</td>
      {if $EsAdmin }
      <td><a href="editarProducto/{$producto['id_producto']}">EDITAR</a></td>
      <td><a href="borrarProducto/{$producto['id_producto']}">BORRAR</a></td>
      {else}
      <td><a href="detalleProducto/{$producto['id_producto']}">DETALLE</a></td>
      {/if}
    </tr>
      {/foreach}
  </tbody>
</table>

</div>
