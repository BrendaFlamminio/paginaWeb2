<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    {foreach from=$imagenes item=imagen}
    <div class="carousel-item active">
      <img class="d-block w-100" src="{imagen['direccion']}" alt="First slide">
        {if $esAdmin}
        <a href="deleteImagen/{imagen['id_imagen']}"></a>
        {/if}
    </div>

    {/foreach}

    {if $esAdmin}
      {include file="mostrarSubirImagen.tpl"}
    {/if}

  </div>
</div>
