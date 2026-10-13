function mostrarMensaje() {
    let mensaje = document.querySelector("#mensaje");

    mensaje.textContent = "Mensaje de prueba";
    mensaje.classList.remove("oculto");
}

document.querySelector("#boton").addEventListener("click", mostrarMensaje);