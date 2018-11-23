'use strict'

  let templateComentario;

let traerComent =document.getElementById("traerComentarios");
  //boton.addEventListener('click', traer(boton.value));

window.onload = function(){
  fetch('js/templates/comentarios.handlebars')
  .then(response => response.text())
  .then(template => {
      templateComentario = Handlebars.compile(template); // compila y prepara el template


      getComentarios(traerComent.value);
  });
}

let enviar = document.getElementById('nuevoComment');
enviar.addEventListener("click",post);

function getComentarios(id) {

    fetch("api/comentario/"+id)
    .then(response => {
      if (response.ok)
        return response.json();
      })
    .then(jsonComentarios => mostrarComentarios(jsonComentarios));

    let eliminar = document.getElementsByClassName('js-borrar');
    cargarEvent(eliminar);

}
function cargarEvent(eliminar){
  for(let i =0;i<eliminar.length;i++){
    eliminar[i].addEventListener('click',deleteComentario);
  }
}



function post(){
  let traerComent =document.getElementById("traerComentarios");
  let puntaje = document.getElementById('puntaje');

  let text = puntaje.options[puntaje.selectedIndex].value;
  console.log(text);
  let nuevoComentario = {
     "texto" :document.getElementById('texto').value,
     "puntaje" : document.getElementById('puntaje').value,
     "id_producto" : document.getElementById('idProducto').value,
     "id_user" : document.getElementById('idUsuario').value,

  }


  fetch("api/comentario",{
    headers: {
    'Content-type': 'application/json'
  },
  method: 'POST',
  body:  JSON.stringify(nuevoComentario),

});
getComentarios(traerComent.value);
}

function mostrarComentarios(jsonComentarios) {
    let admin = document.getElementById('admin').value;
    if(admin == 1){
      admin = true;
    }else{
      admin=false;
    }

    console.log(admin);
    let context = { // como el assign de smarty
        comentarios: jsonComentarios,
        admin: admin,

    };
    let html = templateComentario(context);
    document.querySelector("#container").innerHTML = html;

    document.querySelectorAll(".js-borrar").forEach(item => item.addEventListener("click", function(e){
      let id = item.getAttribute("name");
      console.log(id);
      deleteComentario(id);
    }));
}

function deleteComentario(id){
  console.log(id+"sds")
  console.log("api/comentario/"+id)
    fetch("api/comentario/"+id, {
      method: "DELETE"
    }).then(r=>getComentarios());


}
