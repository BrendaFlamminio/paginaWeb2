<?php

class ConfigApi
{
    public static $RESOURCE = 'resource';
    public static $PARAMS = 'params';
    public static $RESOURCES = [
      'comentario#GET'=> 'ComentarioController#getComentarios',
      'comentario#DELETE'=> 'ComentarioController#borrarComentario',
      'comentario#POST'=> 'ComentarioController#InsertarComentario',

    ];

}

 ?>
