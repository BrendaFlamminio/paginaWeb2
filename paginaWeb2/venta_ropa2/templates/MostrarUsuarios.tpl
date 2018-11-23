{include file="header.tpl"}

    <h1>{$Titulo}</h1>

    <div class="container">
      <ul class="list-group">
            {foreach from=$Usuarios item=usuario}

                <li class="list-group-item">{$usuario['nombre']} ----- {$usuario['pass']} {if $usuario['admin']==0} Es usuario  <a href="permitir/{$usuario['id']}/1">Conceder permisos</a> {else} Es adminitrador  <a href="permitir/{$usuario['id']}/0">Quitar permisos</a>{/if}</li>

            {/foreach}
      </ul>
    </div>


{include file="footer.tpl"}
