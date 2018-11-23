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


        <input type="hidden" name="button" id ="traerComentarios" value = "{$Producto['id_producto']}"> </input>

        </div>
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            {foreach from=$imagenes item=imagen}
            <div class="carousel-item active">
              <img class="d-block w-100" src="{$imagen['direccion']}" alt="First slide">
                {if $EsAdmin}
                <a href="borrarImagen/{$imagen['id_imagen']}">delete</a>
                {/if}
            </div>
          </div>
        </div>

            {/foreach}

            {if $EsAdmin}
            <form class="" action="nuevaImagen/{$Producto['id_producto']}" method="post" enctype="multipart/form-data">
              <input type="hidden" class="form-control" id="idForm" name="idForm" value="{$Producto['id_producto']}">
              <input type="hidden" name="esAdmin" id= "admin" value="{$EsAdmin}">
              <input type= "hidden" name="esAdmin" id="idUsuario" value="{$idUser}">

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



        <div id="container">
          
        </div>

          {if $Editable}

                <form >
                  <input type="hidden" class="form-control" id="idProducto" name="idForm" value="{$Producto['id_producto']}">
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Dejanos tu voto para este producto</label>
                    <select class="form-control" id="puntaje">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">Escribe aqui tu comentario</label>
                    <input type="text" class="form-control" id="texto" rows="3"
                    value=""></input>
                  </div>
                  <button type="button" class="btn btn-primary" id ="nuevoComment">Agregar</button>
                </form>
          {/if}
    </div>

{include file="footer.tpl"}
