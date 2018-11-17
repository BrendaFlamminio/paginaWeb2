{include file="header.tpl"}

    <h1>{$Titulo}</h1>

    <div class="container">
      <ul class="list-group">
            {foreach from=$Usuarios item=usuario}

                <li class="list-group-item">{$usuario['nombre']} ----- {$usuario['pass']}<a href="borrar/{$usuario['id']}">BORRAR</a> <a href="permitir/{$usuario['id']}">Conceder permisos</a> </li>

            {/foreach}
      </ul>
    </div>


{include file="footer.tpl"}
