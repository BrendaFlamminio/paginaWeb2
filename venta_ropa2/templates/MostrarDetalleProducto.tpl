{include file="header.tpl"}

    <h1>{$Titulo}</h1>


    <div class="container">
      <h2>Detalle</h2>

        <div class="form-group">
          <label for="nombreForm">Nombre</label>
          <input type="text" class="form-control" id='nombreForm' name="nombreForm" value="{$Producto['nombre']}">

        <div class="form-group">
          <label for="precioForm">Precio</label>
          <input type="text" class="form-control" id="precioForm" name="precioForm" value="{$Producto["precio"]}" readonly="readonly">
        </div>
        <div class="form-group">
          <label for="descripcionForm">Descripcion</label>
          <input type="text" class="form-control" id="descripcionForm" name="descripcionForm" value="{$Producto["descripcion"]}" readonly="readonly">
        </div>
        <div class="form-group">
          <label for="materialForm">Material</label>
          <input type="text" class="form-control" id="materialForm" name="materialForm" value="{$Producto["material"]}" readonly="readonly">
        </div>
        <div class="form-group">
          <label for="marcaForm">Marca</label>
            {foreach from=$Marcas item=marca}
              {if $Producto['id_marca'] == $marca['id_marca']}
                <input type="text" class="form-control" id="marcaForm" name="materialForm" value="{$marca["nombre"]}" readonly="readonly">
              {/if}
            {/foreach}


        <a href="../api/comentario/{$Producto['id_producto']}">Ver comentarios</a>
        </div>
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            {foreach from=$imagenes item=imagen}
            <div class="carousel-item active">
              <img class="d-block w-100" src="../{$imagen['direccion']}" alt="First slide">
                {if $EsAdmin}
                <a href="{$Home}/borrarImagen/{$imagen['id_imagen']}">delete</a>
                {/if}
            </div>

            {/foreach}

            {if $EsAdmin}
            <form class="" action="../nuevaImagen/{$Producto['id_producto']}" method="post" enctype="multipart/form-data">
              <input type="hidden" class="form-control" id="idForm" name="idForm" value="{$Producto['id_producto']}">
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
            {/if}

          </div>
        </div>
        <div id="container">

        </div>
    </div>

{include file="footer.tpl"}
