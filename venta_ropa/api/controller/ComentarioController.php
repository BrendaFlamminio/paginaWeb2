<?php

  require_once "Api.php";
  r
  require_once "././model/ComentarioModel.php";

  class ComentarioController extends Api {
    private $model;

    public  __construct(){
      parent::__construct();
      $this->model = new ComentarioModel();
    }

    public function getComentarios($id = null){

          if(isset($id)){
              $id_producto = $id[0];
              $arreglo = $this->model-> getComentarios($id_producto);
              $data = $arreglo;

          }else{
            $data = $this->model->getComentarios();
          }
            if(isset($data)){
              return $this->json_response($data, 200);
            }else{
              return $this->json_response(null, 404);
            }
        }

      public function borrarComentario($id = null){
        if(count($id) == 1){
            $id_producto = $id[0];
            $r =  $this->model->deleteComentario($id_producto);
            if($r == false){
              return $this->json_response($r, 300);
            }

            return $this->json_response($r, 200);
        }else{
          return  $this->json_response("No task specified", 300);
        }
      }


      function InsertarComentario($param = null){
        $objetoJson = $this->getJSONData();
        $r = $this->model->updateComentario($objetoJson->$texto, $objetoJson->$puntaje, $objetoJson->id_user, $objectJson->$id_producto);

        return $this->json_response($r, 200);
      }


      }


  }







 ?>
