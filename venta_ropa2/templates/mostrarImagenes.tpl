
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <p>essaa</p>
  <div class="carousel-inner">
    {foreach from=$imagenes item=imagen}
    <div class="carousel-item active">
      <img class="d-block w-100" src="{$imagen['direccion']}" alt="First slide">
        {if $EsAdmin}
        <a href="deleteImagen/{$imagen['id_imagen']}">delete</a>
        {/if}
    </div>

    {/foreach}

    {if $EsAdmin}
    <form class="" action="../nuevaImagen" method="post" enctype="multipart/form-data">
      <input type="hidden" class="form-control" id="idForm" name="idForm" value="{$['id']}">
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
