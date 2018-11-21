<?php

require_once "Api.php";
require_once "./../model/MarcaModel.php";
require_once "./../model/ProductoModel.php";

class ropaApiController extends Api{

  private $model;
  function __construct(){
    parent::__construct();
    $this->modelM = new MarcaModel();
    $this->modelP = new ProductoModel();
  }

  function GetProductos($param = null){

    if(isset($param)){
        $id_tarea = $param[0];
        $arreglo = $this->modelP-> GetProducto($id_producto);
        $data = $arreglo;

    }else{
      $data = $this->modelP->GetProductos();
    }
      if(isset($data)){
        return $this->json_response($data, 200);
      }else{
        return $this->json_response(null, 404);
      }
  }

  function BorrarProducto($param = null){
    if(count($param) == 1){
        $id_tarea = $param[0];
        $r =  $this->modelP->BorrarProducto($id_producto);
        if($r == false){
          return $this->json_response($r, 300);
        }

        return $this->json_response($r, 200);
    }else{
      return  $this->json_response("No task specified", 300);
    }
  }

  function InsertarProducto($param = null){
    $objetoJson = $this->getJSONData();
    $r = $this->modelP->InsertarProducto($objetoJson->$nombre, $objetoJson->$precio, $objetoJson->$descripcion,
     $objetoJson->$material);

    return $this->json_response($r, 200);
  }

  function GuardarEditarProducto($param = null){
    if(count($param) == 1){
      $idTarea = $param[0];
      $objetoJson = $this->getJSONData();
      $r = $this->modelP->GuardarEditarProducto($objetoJson->$nombre, $objetoJson->$precio, $objetoJson->$descripcion,
       $objetoJson->$material, $objetoJson->$id_marca);
      return $this->json_response($r, 200);

    }else{
      return  $this->json_response("No task specified", 300);
    }

  }
  function GetMarcas($param = null){

    if(isset($param)){
        $id_tarea = $param[0];
        $arreglo = $this->modelP-> GetMarca($id_producto);
        $data = $arreglo;

    }else{
      $data = $this->modelM->GetMarcas();
    }
      if(isset($data)){
        return $this->json_response($data, 200);
      }else{
        return $this->json_response(null, 404);
      }
  }

  function BorrarMarca($param = null){
    if(count($param) == 1){
        $id_tarea = $param[0];
        $r =  $this->modelM->BorrarMarca($id_marca);
        if($r == false){
          return $this->json_response($r, 300);
        }

        return $this->json_response($r, 200);
    }else{
      return  $this->json_response("No task specified", 300);
    }
  }

  function InsertarMarca($param = null){
    $objetoJson = $this->getJSONData();
    $r = $this->modelM->InsertarMarca($objetoJson->$nombre, $objetoJson->$site_url, $objetoJson->$email);

    return $this->json_response($r, 200);
  }
  function GuardarEditarMarca($param = null){
    if(count($param) == 1){
      $idTarea = $param[0];
      $objetoJson = $this->getJSONData();
      $r = $this->modelM->GuardarEditarMarca($objetoJson->$nombre, $objetoJson->$site_url, ,$objetoJson->$id));
      return $this->json_response($r, 200);

    }else{
      return  $this->json_response("No task specified", 300);
    }

  }
}
 ?>
