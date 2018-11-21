{include file="header.tpl"}

<h1>{$Titulo}</h1>
<form method="post" action="guardaUsuario">
  <div class="form-group" >
    <label for="exampleInputEmail1">Usuario o email</label>
    <input type="email" class="form-control" name="IdUsuario"  placeholder="Enter email">

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Contraseña</label>
    <input type="password" class="form-control" name="IdPassword" placeholder="Password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" name="">
    <label class="form-check-label" for="exampleCheck1">Estoy de acuerdo</label>
  </div>
  <button type="submit" class="btn btn-primary">Registrarme</button>
</form>
{include file="footer.tpl"}
