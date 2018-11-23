<!DOCTYPE html>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <base href= {$Home}>
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>{$Titulo}</title>
  </head>
  <body>
    <div class="container">
      <div class="row ">
        <div class="col-12 col-md-3 logo">
              <img src="images/logo.jpg"class="img-responsive " class="logo" alt="logo Amsterdam">
        </div>
      </div>
    </div>
      <div class="container">
        <nav class="nav">
          {if !$Editable}
          <a class="nav-link active" href="home">Inicio</a>
          {/if}
          {if $Editable}
          <a class="nav-link active" href="admin">Inicio</a>
              {if $EsAdmin}
                  <a class="nav-link" href="agregarMarca">Nueva marca</a>
                  <a class="nav-link" href="nuevoProducto">Nuevo producto</a>
                  <a class="nav-link" href="mostrarUsuarios">Administar usuarios</a>
              {/if}
              <a class="nav-link " href="CerrarSesion">Cerrar Sesion</a>
        {else}
        <a class="nav-link" href="nuevoUsuario">Registrarse</a>
        <a class="nav-link " href="login">Iniciar Sesion</a>
        {/if}

      </div>
