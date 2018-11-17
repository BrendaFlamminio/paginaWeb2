<?php

class ConfigApi
{
    public static $RESOURCE = 'resource';
    public static $PARAMS = 'params';
    public static $RESOURCES = [
      'producto#GET'=> 'TareasApiController#GetProducto',
      'producto#DELETE'=> 'TareasApiController#DeleteProducto',
      'producto#POST'=> 'TareasApiController#InsertProducto',
      'producto#PUT'=> 'TareasApiController#UpdateProducto'
      'marca#GET'=> 'TareasApiController#GetMarca',
      'marca#DELETE'=> 'TareasApiController#DeleteMarca',
      'marca#POST'=> 'TareasApiController#InsertMarca',
      'marca#PUT'=> 'TareasApiController#UpdateMarca'
    ];

}

 ?>
