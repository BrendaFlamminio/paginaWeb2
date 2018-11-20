'use strict'

document.getElementById("traerComments").addEventListener("click", function(){
  console.log("aguanteeei");
  let templateComentario;

  fetch("templates/comentarios.handlebars")
  .then(response => response.text())
  .then(template => {
      templateComentario = Handlebars.compile(template); // compila y prepara el template

      getComentarios();
  });





});

function getComentarios() {

    fetch("api/comentario")
    .then(response => response.json())
    .then(jsonComentarios => {
        mostrarComentarios(jsonComentarios);
    })
}

function mostrarComentarios(jsonComentarios) {
    let context = { // como el assign de smarty
        comentarios: jsonComentarios,

    }
    let html = templateComentario(context);
    document.querySelector("#container-comentario").innerHTML = html;
}
