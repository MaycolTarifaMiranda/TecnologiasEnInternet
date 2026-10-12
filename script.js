botonOscuro.addEventListener("click", function () {
    document.body.classList.toggle("oscuro");
});


const formulario = document.querySelector("#formularioContacto");
const respuesta = document.querySelector("#respuestaFormulario");

formulario.addEventListener("submit", function (evento) {
    evento.preventDefault();

    respuesta.textContent =
        "¡Gracias por escribir pero este formulario es una demostración y todavía no envía datos, SORRY :'P";

    formulario.reset();
});