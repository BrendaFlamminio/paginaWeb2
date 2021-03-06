
<h2>Productos</h2>
<div class="container">
  <div class="row">
  <div class="col-12">
{if $Editable}
<form class="" action="filtrarProductos" method="post">


    <select name = "marca" >
      {foreach from=$Marcas item=marca}
        <option value="{$marca['id_marca']}">{$marca['nombre']}</option>
      {/foreach}
    </select>
    <button type="submit" name="button">Filter</button>

    </div>
  </div>
</div>
</form>
{/if}
  <table class="table">

  <thead>

    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Marca</th>

      {if $EsAdmin }
      <th scope="col">Editar</th>
      <th scope="col">Borrar</th>
      {/if}
      <th scope="col">Detalle</th>
    </tr>
  </thead>
  <tbody>
    {foreach from=$Productos item=producto}
    <tr>
      <td>{$producto['nombre']}</td>
      <td>{$producto['descripcion']}</td>
      <td>{$producto['nombre_marca']}</td>
      
      {if $EsAdmin }
      <td><a href="editarProducto/{$producto['id_producto']}">EDITAR</a></td>
      <td><a href="borrarProducto/{$producto['id_producto']}">BORRAR</a></td>
      {/if}
        <td><a href="detalleProducto/{$producto['id_producto']}" id="detalle">DETALLE</a></td>
    </tr>
      {/foreach}
  </tbody>
</table>

</div>
