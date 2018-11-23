'use strict'

  let templateComentario;

let traerComent =document.getElementById("traerComentarios");
  //boton.addEventListener('click', traer(boton.value));


  fetch('js/templates/comentarios.handlebars')
  .then(response => response.text())
  .then(template => {
      templateComentario = Handlebars.compile(template); // compila y prepara el template


      getComentarios(traerComent.value);
  });


let enviar = document.getElementById('nuevoComment');
enviar.addEventListener("click",post);

function getComentarios(id) {

    fetch("api/comentario/"+id)
    .then(response => {
      if (response.ok)
        return response.json();
      })
    .then(jsonComentarios => mostrarComentarios(jsonComentarios));
}

function deleteComentario(id){
  fetch("api/comentario#DELETE/"+id)
    .then(respone.ok)
}

function post(){
  let puntaje = document.getElementById('puntaje');

  let text = puntaje.options[puntaje.selectedIndex].value;
  console.log(text);
  let nuevoComentario = {
     "texto" :document.getElementById('texto').value,
     "puntaje" : document.getElementById('puntaje').value,
     "id_producto" : document.getElementById('idProducto').value,
     "id_user" : document.getElementById('idUsuario').value,

  }
  console.log(nuevoComentario);

  fetch("api/comentario",{
    headers: {
    'Content-type': 'application/json'
  },
  method: 'POST',
  body:  JSON.stringify(nuevoComentario),

});

}

function mostrarComentarios(jsonComentarios) {
    let context = { // como el assign de smarty
        comentarios: jsonComentarios,


    };
    let html = templateComentario(context);
    document.querySelector("#container").innerHTML = html;
}
